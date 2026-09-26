<?php

namespace App\Content;

use Illuminate\Support\Arr;

class ContentRegistry
{
    public function all(): array
    {
        return config('content_modules', []);
    }

    public function get(string $key): array
    {
        abort_unless(isset($this->all()[$key]), 404);

        return $this->all()[$key];
    }

    public function emptyRecord(array $definition): array
    {
        return array_map(fn ($field) => $this->emptyValue($field), $definition['fields']);
    }

    public function emptyValue(array $field): mixed
    {
        return match ($field['type']) {
            'boolean' => false,
            'number' => 0,
            'list' => [],
            'object' => array_map(fn ($child) => $this->emptyValue($child), $field['fields']),
            default => '',
        };
    }

    public function fieldAt(array $definition, string $path): ?array
    {
        $field = ['type' => 'object', 'fields' => $definition['fields']];
        foreach (explode('.', $path) as $part) {
            $field = match ($field['type'] ?? null) {
                'object' => $field['fields'][$part] ?? null,
                'list' => ctype_digit($part) ? $field['item'] : null,
                default => null,
            };
            if (! $field) {
                return null;
            }
        }

        return $field;
    }
}
