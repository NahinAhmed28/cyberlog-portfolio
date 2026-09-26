<?php

namespace Database\Seeders;

use App\Content\ContentRegistry;
use App\Models\ContentEntry;
use Illuminate\Database\Seeder;

abstract class ContentSeeder extends Seeder
{
    protected function seedFeature(string $module, array $records): void
    {
        $definition = app(ContentRegistry::class)->get($module);
        foreach ($records as $index => $data) {
            $seedKey = $definition['repeatable'] ? 'default-'.($index + 1) : 'default';
            $existing = ContentEntry::forModule($module)->newQuery()->withTrashed()->where('seed_key', $seedKey)->first();
            if ($existing) {
                // Fill fields added after this row was first seeded; never overwrite admin edits.
                foreach ($definition['fields'] as $name => $field) {
                    if (array_key_exists($name, $data) && $existing->getRawOriginal('content_'.$name) === null) {
                        $existing->setAttribute('content_'.$name, $data[$name]);
                    }
                }
                $existing->save();

                continue;
            }
            $entry = ContentEntry::forModule($module);
            $entry->seed_key = $seedKey;
            $entry->sort_order = ($index + 1) * 10;
            $entry->is_visible = true;
            foreach ($definition['fields'] as $name => $field) {
                $entry->setAttribute('content_'.$name, $data[$name] ?? app(ContentRegistry::class)->emptyValue($field));
            }
            $entry->save();
        }
    }
}
