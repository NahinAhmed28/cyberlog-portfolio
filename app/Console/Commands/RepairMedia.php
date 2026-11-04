<?php

namespace App\Console\Commands;

use App\Models\ContentAudit;
use App\Models\PageContent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class RepairMedia extends Command
{
    protected $signature = 'cms:repair-media {--apply : Save unambiguous repairs with an audit trail}';

    protected $description = 'Find broken media references and repair known files without guessing';

    public function handle(): int
    {
        $index = [];
        foreach ([public_path('images'), public_path('assets'), storage_path('app/public')] as $root) {
            if (! is_dir($root)) {
                continue;
            }
            foreach (File::allFiles($root) as $file) {
                $absolute = str_replace('\\', '/', $file->getPathname());
                $path = str_starts_with($absolute, str_replace('\\', '/', storage_path('app/public')).'/')
                    ? 'storage/'.substr($absolute, strlen(str_replace('\\', '/', storage_path('app/public'))) + 1)
                    : substr($absolute, strlen(str_replace('\\', '/', public_path())) + 1);
                $index[basename($path)][] = $path;
            }
        }
        $missing = 0;
        $repaired = 0;
        foreach (PageContent::with('section')->get() as $entry) {
            $before = $entry->data;
            $data = $before;
            $fields = config('content_modules.'.$entry->section->key.'.fields', []);
            $walk = function (array &$values, array $fields) use (&$walk, $index, &$missing, &$repaired, $entry) {
                foreach ($fields as $key => $field) {
                    $value = $values[$key] ?? null;
                    if ($field['type'] === 'object' && is_array($value)) {
                        $walk($values[$key], $field['fields']);
                    } elseif ($field['type'] === 'list' && is_array($value)) {
                        foreach ($value as $i => $item) {
                            $wrapped = ['value' => $item];
                            $walk($wrapped, ['value' => $field['item']]);
                            $values[$key][$i] = $wrapped['value'];
                        }
                    } elseif (in_array($field['type'], ['image', 'video']) && is_string($value) && $value !== '' && ! preg_match('~^https?://~i', $value)) {
                        $path = ltrim(str_replace('\\', '/', $value), '/');
                        if (str_contains($path, '..')) {
                            $missing++;

                            continue;
                        }
                        $exists = str_starts_with($path, 'storage/') ? is_file(storage_path('app/public/'.substr($path, 8))) : is_file(public_path($path));
                        if ($exists) {
                            continue;
                        }
                        $matches = array_values(array_unique($index[basename($path)] ?? []));
                        if (count($matches) === 1) {
                            $values[$key] = $matches[0];
                            $repaired++;
                            $this->line('Repair '.$entry->id.': '.$value.' -> '.$matches[0]);
                        } else {
                            $missing++;
                            $this->warn('Unresolved '.$entry->id.' '.$key.': '.$value.' (restore the original file or choose a replacement)');
                        }
                    }
                }
            };
            $walk($data, $fields);
            if ($this->option('apply') && $data !== $before) {
                $entry->update(['data' => $data]);
                ContentAudit::create(['module' => $entry->section->key, 'entry_id' => $entry->id, 'action' => 'updated', 'before' => $before, 'after' => $data]);
            }
        }
        $this->info($repaired.' repairable references; '.$missing.' unresolved. '.($this->option('apply') ? 'Repairs saved.' : 'Dry run. Use --apply to save.'));

        return $missing ? self::FAILURE : self::SUCCESS;
    }
}
