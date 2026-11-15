<?php

namespace App\Content;

use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ContentRepository
{
    private const GENERATION_KEY = 'cms.public-content.generation.v1';

    private const SNAPSHOT_ATTRIBUTE = 'cms.public-content.snapshot';

    public function __construct(private ContentRegistry $registry) {}

    private function records(string $key): array
    {
        $cacheKey = 'cms.records.'.$key;
        if (! request()->attributes->has($cacheKey)) {
            $definition = $this->registry->get($key);
            $records = $this->snapshot()[$key] ?? [];
            request()->attributes->set($cacheKey, array_map(function (array $record) use ($definition) {
                $data = [];
                foreach ($definition['fields'] as $name => $field) {
                    $data[$name] = $record[$name] ?? $this->registry->emptyValue($field);
                }

                return $this->absoluteUrls($data, $definition['fields']);
            }, $records));
        }

        return request()->attributes->get($cacheKey);
    }

    /** One database read replaces the section lookup and content query for every module. */
    public function snapshot(): array
    {
        if (! request()->attributes->has(self::SNAPSHOT_ATTRIBUTE)) {
            // Never publish uncommitted CMS edits to the shared cache.
            if (DB::connection()->transactionLevel() > 0) {
                $snapshot = $this->loadSnapshot();
            } else {
                $cache = Cache::store(config('performance.cms_cache_store'));
                $generation = $cache->get(self::GENERATION_KEY);
                if ($generation === null) {
                    $cache->add(self::GENERATION_KEY, (string) Str::uuid(), now()->addYears(10));
                    $generation = $cache->get(self::GENERATION_KEY);
                }
                $snapshot = $cache->remember(
                    'cms.public-content.v1.'.$generation,
                    max(1, (int) config('performance.cms_cache_ttl', 3600)),
                    fn () => $this->loadSnapshot(),
                );
            }
            request()->attributes->set(self::SNAPSHOT_ATTRIBUTE, $snapshot);
        }

        return request()->attributes->get(self::SNAPSHOT_ATTRIBUTE);
    }

    private function loadSnapshot(): array
    {
        $snapshot = [];
        $records = DB::table('page_contents')
            ->join('page_sections', 'page_sections.id', '=', 'page_contents.page_section_id')
            ->where('page_contents.is_visible', true)->whereNull('page_contents.deleted_at')
            ->orderBy('page_contents.sort_order')->orderBy('page_contents.id')
            ->get(['page_sections.key', 'page_contents.data']);
        foreach ($records as $record) {
            $snapshot[$record->key][] = json_decode($record->data, true, flags: JSON_THROW_ON_ERROR);
        }

        return $snapshot;
    }

    /** Site paths are stored as "/about" (editable) but render as absolute URLs, exactly like route() did. */
    private function absoluteUrls(array $data, array $fields): array
    {
        foreach ($fields as $name => $field) {
            $data[$name] = $this->absoluteUrl($data[$name] ?? null, $field);
        }

        return $data;
    }

    private function absoluteUrl(mixed $value, array $field): mixed
    {
        return match ($field['type']) {
            'url' => is_string($value) && str_starts_with($value, '/') && ! str_starts_with($value, '//') ? url($value) : $value,
            'object' => $this->absoluteUrls(is_array($value) ? $value : [], $field['fields']),
            'list' => array_map(fn ($item) => $this->absoluteUrl($item, $field['item']), is_array($value) ? $value : []),
            default => $value,
        };
    }

    public function value(string $key, string $field): mixed
    {
        $definition = $this->registry->get($key);

        if (! isset($definition['fields'][$field])) {
            return '';
        }

        return $this->records($key)[0][$field] ?? $this->registry->emptyValue($definition['fields'][$field]);
    }

    public function items(string $key): array
    {
        $definition = $this->registry->get($key);

        return array_map(fn ($row) => match ($definition['shape']) {
            'tuple' => array_values($row),
            'scalar' => $row['value'],
            default => $row,
        }, $this->records($key));
    }

    public function forget(string $key): void
    {
        $this->invalidate();
    }

    public function invalidate(): void
    {
        foreach (array_keys(request()->attributes->all()) as $attribute) {
            if ($attribute === self::SNAPSHOT_ATTRIBUTE || str_starts_with($attribute, 'cms.records.')) {
                request()->attributes->remove($attribute);
            }
        }

        // A generation prevents a concurrent reader from repopulating the current cache
        // with old content after an editor saves. Old generations expire with the TTL.
        DB::connection()->afterCommit(fn () => Cache::store(config('performance.cms_cache_store'))
            ->forever(self::GENERATION_KEY, (string) Str::uuid()));
    }
}
