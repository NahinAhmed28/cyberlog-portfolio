<?php

namespace App\Content;

use Illuminate\Support\Str;

/**
 * Describes a module's fields for the content form: a friendly label, the website section each field
 * belongs to (its anchor and editor group, named like the page editor's blocks) and a help line.
 * Every field lands in exactly one scope, so a section's Edit link never leaks another section's inputs.
 */
class EditorSchema
{
    /** Values rendered into the browser tab or the meta description. */
    public const SEO_ANCHOR = 'seo-settings';

    public const SEO_GROUP = 'Page settings';

    /** Fields the current template never reads: kept editable under the module's own name. */
    public const UNPLACED_ANCHOR = 'other';

    /** Headline parts of a page section. Item cards keep their plain field names. */
    private const SECTION_ROLES = [
        'heading' => 'Section heading (white part)', 'label' => 'Section heading (highlighted part)',
        'text' => 'Section description', 'paragraph' => 'Section description',
        'title_2' => 'CTA section heading', 'text_2' => 'CTA description',
    ];

    /**
     * @param  string|null  $source  Expanded template of the page being edited; the module's own template when omitted.
     */
    public function fields(string $module, array $fields, ?string $source = null): array
    {
        $definition = config('content_modules.'.$module) ?? [];
        $repeatable = (bool) ($definition['repeatable'] ?? false);
        $placement = app(ContentPlacement::class);
        $source ??= isset($definition['source']) ? $placement->source(base_path($definition['source'])) : '';
        $sections = $placement->sections($source);
        $moduleSections = array_values(array_filter($sections, fn ($section) => in_array($module, $section['modules'], true)));
        $moduleTitle = app(PageEditor::class)->sectionTitle($module, $definition['title'] ?? Str::headline($module));

        foreach ($fields as $key => &$field) {
            // Only a value rendered into the <title> or meta description is an SEO setting; a card's "title" is its name.
            $seo = ! $repeatable && preg_match('~@section\(\s*[\'"](?:title|meta_description)[\'"][^\n]*?'.$this->call($module, $key).'~', $source) === 1;
            $section = $seo ? null : $this->section($module, $key, $repeatable, $sections, $moduleSections, $source);
            $label = $seo ? match ($key) {
                'title' => 'SEO page title',
                'meta_description' => 'SEO meta description',
                default => app(PageEditor::class)->label($field, $key),
            } : $this->label($key, $field, $repeatable);
            $field['label'] = $field['editor_label'] = $label;
            $field['anchor'] = $seo ? self::SEO_ANCHOR : ($section['anchor'] ?? self::UNPLACED_ANCHOR);
            $field['editor_group'] = $seo ? self::SEO_GROUP : ($section['title'] ?? $moduleTitle);
            $field['editor_used'] = $seo || $section !== null;
            $field['help'] = match (true) {
                $seo => 'Used for the browser tab and search results unless the page\'s SEO settings override it. '.$label.'.',
                $section === null => 'Part of '.$moduleTitle.'. '.$label.'.',
                default => 'Appears in the '.$section['title'].' section on the website. '.$label.'.',
            };
            if (isset($field['fields'])) {
                $field['fields'] = $this->children($field['fields'], $repeatable, $field);
            }
            if (isset($field['item'])) {
                $field['item'] = $this->children(['item' => $field['item']], $repeatable, $field)['item'];
            }
        }
        unset($field);

        return $fields;
    }

    /** The website section a field belongs to, or null when the template never reads it. */
    private function section(string $module, string $key, bool $repeatable, array $sections, array $moduleSections, string $source): ?array
    {
        foreach ($sections as $section) {
            if (isset($section['fields'][$module][$key])) {
                return $section;
            }
        }
        // Items are rendered together by the section that lists them; a value prepared outside the
        // sections (for example in a @php block) belongs with the module's first section.
        if ($repeatable || preg_match('~'.$this->call($module, $key).'~', $source) === 1) {
            return $moduleSections[0] ?? null;
        }

        return null;
    }

    /** Nested fields are filed with their parent. */
    private function children(array $fields, bool $repeatable, array $parent): array
    {
        foreach ($fields as $key => &$field) {
            $label = $this->label($key, $field, $repeatable);
            $field['label'] = $field['editor_label'] = $label;
            $field['anchor'] = $parent['anchor'];
            $field['editor_group'] = $parent['editor_group'];
            $field['editor_used'] = $parent['editor_used'];
            $field['help'] = 'Part of '.$parent['label'].'. '.$label.'.';
            if (isset($field['fields'])) {
                $field['fields'] = $this->children($field['fields'], $repeatable, $field);
            }
            if (isset($field['item'])) {
                $field['item'] = $this->children(['item' => $field['item']], $repeatable, $field)['item'];
            }
        }
        unset($field);

        return $fields;
    }

    private function label(string $key, array $field, bool $repeatable): string
    {
        $label = app(PageEditor::class)->label($field, $key);
        if ($field['type'] === 'url') {
            return 'Link destination';
        }
        if (str_starts_with($key, 'link_label') || str_starts_with($key, 'button_label')) {
            return 'Button or link text';
        }
        if (str_contains($key, 'placeholder')) {
            return Str::headline($key).' (form prompt)';
        }
        if ($repeatable) {
            return $label;
        }
        if (isset(self::SECTION_ROLES[$key])) {
            return self::SECTION_ROLES[$key];
        }
        $role = preg_replace('/\s+[\x{2014}\x{2013}]\s+.*$/u', '', $label);
        if (preg_match('/^(Title|Text|Heading|Paragraph|Div Text|Span Text|Label)(?:\s+\d+)?$/i', $role)) {
            $part = preg_match('/_(\d+)$/', $key, $number) ? ' (part '.$number[1].')' : '';

            return (str_contains($key, 'heading') || str_starts_with($key, 'title') ? 'Section heading' : 'Section description').$part;
        }

        return $label;
    }

    private function call(string $module, string $key): string
    {
        return 'content\(\s*[\'"]'.preg_quote($module, '~').'[\'"]\s*,\s*[\'"]'.preg_quote($key, '~').'[\'"]';
    }
}
