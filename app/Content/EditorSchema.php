<?php

namespace App\Content;

use Illuminate\Support\Str;

class EditorSchema
{
    public function fields(string $module, array $fields, ?string $pageSource = null): array
    {
        $definition = config('content_modules.'.$module);
        $source = $definition && is_file(base_path($definition['source'])) ? file_get_contents(base_path($definition['source'])) : '';
        $source = $pageSource ?? $source;
        $fragments = app(PageComposition::class)->fragments($source);
        foreach ($fields as $key => &$field) {
            $label = app(PageEditor::class)->label($field, $key);
            $role = preg_replace('/\s+[\x{2014}\x{2013}]\s+.*$/u', '', $label);
            $roles = [
                'title' => 'SEO page title', 'meta_description' => 'SEO meta description',
                'heading' => 'Section heading (white part)', 'label' => 'Section heading (highlighted part)',
                'text' => 'Section description', 'paragraph' => 'Section description',
                'title_2' => 'CTA section heading', 'text_2' => 'CTA description',
            ];
            if (isset($roles[$key])) {
                $label = $roles[$key];
            } elseif (preg_match('/^(Title|Text|Heading|Paragraph|Div Text|Span Text|Label)(?:\s+\d+)?$/i', $role)) {
                $part = preg_match('/_(\d+)$/', $key, $number) ? ' (part '.$number[1].')' : '';
                $label = (str_contains($key, 'heading') ? 'Section heading' : 'Section description').$part;
            }
            if ($field['type'] === 'url') {
                $label = 'Link destination';
            } elseif (str_starts_with($key, 'link_label') || str_starts_with($key, 'button_label')) {
                $label = 'Button or link text';
            } elseif (str_contains($key, 'placeholder')) {
                $label = Str::headline($key).' (form prompt)';
            }
            $field['label'] = $label;
            $field['editor_label'] = $label;
            $field['editor_group'] = in_array($key, ['title', 'meta_description']) ? 'SEO settings' : 'Section content';
            $field['anchor'] = '';
            foreach ($fragments as $index => $fragment) {
                if (preg_match('~content\(\s*[\'"]'.preg_quote($module, '~').'[\'"]\s*,\s*[\'"]'.preg_quote($key, '~').'[\'"]~', $fragment['html'])) {
                    preg_match('~\bid="([^"{]+)"~', $fragment['html'], $id);
                    $field['anchor'] = $id[1] ?? 'page-section-'.($index + 1);
                    $field['editor_group'] = $index === 0 ? 'Hero section' : Str::headline($id[1] ?? 'Section '.($index + 1));
                    break;
                }
            }
            if ($field['anchor'] === '' && preg_match('~content\(\s*[\'"]'.preg_quote($module, '~').'[\'"]\s*,\s*[\'"]'.preg_quote($key, '~').'[\'"]~', $source, $match, PREG_OFFSET_CAPTURE)) {
                $nearest = null;
                foreach ($fragments as $index => $fragment) {
                    if ($fragment['end'] < $match[0][1]) {
                        $nearest = [$index, $fragment];
                    }
                }
                if ($nearest) {
                    preg_match('~\bid="([^"{]+)"~', $nearest[1]['html'], $id);
                    $field['anchor'] = $id[1] ?? 'page-section-'.($nearest[0] + 1);
                    $field['editor_group'] = Str::headline($id[1] ?? 'Contact / CTA section');
                }
            }
            $field['help'] = 'Appears in '.$field['editor_group'].' on the website. '.$label.'.';
            if (isset($field['fields'])) {
                $field['fields'] = $this->fields($module, $field['fields']);
            }
            if (isset($field['item'])) {
                $field['item'] = $this->fields($module, ['item' => $field['item']])['item'];
            }
        }

        return $fields;
    }
}
