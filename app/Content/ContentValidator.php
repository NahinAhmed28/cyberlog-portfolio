<?php

namespace App\Content;

use Illuminate\Support\Facades\Validator;

class ContentValidator
{
    public function validate(array $data, array $definition): array
    {
        $rules = [];
        $labels = [];
        foreach ($definition['fields'] as $key => $field) {
            $this->rules($key, $field, $rules, $labels);
        }
        $validated = Validator::make($data, $rules, [], $labels)->validate();
        $clean = [];
        foreach ($definition['fields'] as $key => $field) {
            $clean[$key] = $this->clean($validated[$key] ?? null, $field);
        }

        return $clean;
    }

    private function rules(string $key, array $field, array &$rules, array &$labels): void
    {
        $labels[$key] = $field['label'];
        $rules[$key] = match ($field['type']) {
            'number' => ['nullable', 'numeric', 'between:-1000000000,1000000000'],
            'boolean' => ['nullable', 'boolean'],
            'object' => ['nullable', 'array:'.implode(',', array_keys($field['fields']))],
            'list' => ['nullable', 'array', 'max:100'],
            default => ['nullable', 'string', 'max:20000'],
        };
        if (in_array($field['type'], ['url', 'image', 'video'])) {
            $rules[$key][] = function ($attribute, $value, $fail) use ($field) {
                $localMedia = in_array($field['type'], ['image', 'video'])
                    && preg_match('~^(assets|images|storage)/[^<>"\x00-\x1f]+$~u', $value)
                    && ! str_contains($value, '..') && ! str_contains($value, '\\');
                if (! $localMedia && ! SafeContent::safeUrl($value)) {
                    $fail('Use an HTTP(S) URL, a site path, email/telephone link, or an anchor.');
                }
            };
        }
        if ($field['type'] === 'icon') {
            $rules[$key][] = 'regex:/^[a-zA-Z0-9 _-]*$/';
        }
        if ($field['type'] === 'color') {
            $rules[$key][] = 'regex:/^#[0-9a-fA-F]{3,8}$/';
        }
        if ($field['type'] === 'object') {
            foreach ($field['fields'] as $name => $child) {
                $this->rules($key.'.'.$name, $child, $rules, $labels);
            }
        }
        if ($field['type'] === 'list') {
            $this->rules($key.'.*', $field['item'], $rules, $labels);
        }
    }

    private function clean(mixed $value, array $field): mixed
    {
        if ($field['type'] === 'object') {
            $result = [];
            foreach ($field['fields'] as $name => $child) {
                $result[$name] = $this->clean($value[$name] ?? null, $child);
            }

            return $result;
        }
        if ($field['type'] === 'list') {
            return array_values(array_map(fn ($item) => $this->clean($item, $field['item']), $value ?? []));
        }

        return match ($field['type']) {
            'number' => (float) ($value ?? 0),
            'boolean' => (bool) $value,
            'richtext' => SafeContent::html($value ?? ''),
            // Even legacy templates with raw Blade output must never receive executable HTML.
            default => strip_tags($value ?? ''),
        };
    }
}
