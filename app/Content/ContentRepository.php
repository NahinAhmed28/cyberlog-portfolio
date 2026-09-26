<?php

namespace App\Content;

use App\Models\ContentEntry;

class ContentRepository
{
    public function __construct(private ContentRegistry $registry) {}

    private function records(string $key): array
    {
        $cacheKey = 'cms.records.'.$key;
        if (! request()->attributes->has($cacheKey)) {
            $definition = $this->registry->get($key);
            $records = ContentEntry::forModule($key)->newQuery()
                ->where('is_visible', true)->orderBy('sort_order')->orderBy('id')->get();
            request()->attributes->set($cacheKey, $records->map(fn ($record) => $this->absoluteUrls($record->contentData($definition), $definition['fields']))->all());
        }

        return request()->attributes->get($cacheKey);
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
        request()->attributes->remove('cms.records.'.$key);
    }
}
