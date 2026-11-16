<?php

namespace App\Content;

use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Support\Collection;
use Illuminate\Support\Str;

class PageEditor
{
    public function sectionTitle(string $key, string $fallback): string
    {
        if ($label = config('editor_labels.'.$key)) {
            return $label;
        }
        if (str_starts_with($key, 'page_') && ! config('content_modules.'.$key.'.repeatable')) {
            return 'Page headings, introduction & buttons';
        }

        return $fallback;
    }

    public function pages(): Collection
    {
        if (! request()->attributes->has('admin.website_pages')) {
            request()->attributes->set('admin.website_pages', Page::where('kind', 'page')->orderBy('sort_order')->get());
        }

        return request()->attributes->get('admin.website_pages');
    }

    public function label(array $field, string $path): string
    {
        if (isset($field['editor_label'])) {
            return $field['editor_label'];
        }
        $key = Str::afterLast($path, '.');
        $friendly = ['kicker' => 'Short heading above the title', 'eyebrow' => 'Short heading above the title', 'desc' => 'Description', 'group' => 'Category', 'route' => 'Page identifier (created automatically)', 'img_alt' => 'Image description', 'imageAlt' => 'Image description'];
        if (isset($friendly[$key])) {
            return $friendly[$key];
        }
        if (in_array($field['type'], ['image', 'video'])) {
            return $field['type'] === 'video' ? 'Video' : (str_contains($key, 'logo') ? 'Logo' : 'Image');
        }
        if (str_contains($key, 'alt')) {
            return 'Image description';
        }
        if ($field['type'] === 'url') {
            return 'Link destination';
        }
        $label = preg_split('/\s+[—–]\s+/u', $field['label'])[0];
        $label = preg_replace('/^(?:Div Text|Span Text|Paragraph|Label)(\s*\d*)$/i', 'Text$1', $label);
        if (preg_match('/^Item[_ ]?(\d+)$/i', $label, $matches)) {
            return ucfirst($field['type'] === 'textarea' ? 'description' : $field['type']).' '.((int) $matches[1] + 1);
        }

        return $label;
    }

    public function advanced(string $key, array $field): bool
    {
        return in_array($field['type'], ['icon', 'color']) || in_array($key, ['width', 'height', 'class', 'classes', 'toneRgb', 'tone', 'group_routes', 'route']);
    }

    public function scopeTitle(string $module, array $fields): string
    {
        if (str_starts_with($module, 'page_') && ! config('content_modules.'.$module.'.repeatable')) {
            return reset($fields)['editor_group'];
        }

        return $this->sectionTitle($module, config('content_modules.'.$module.'.title'));
    }

    public function preview(PageSection $section, array $data): string
    {
        $fields = config('content_modules.'.$section->key.'.fields');
        foreach ($section->editor_field_keys ?? array_keys($fields) as $key) {
            $value = $data[$key] ?? null;
            if (is_string($value) && $value !== '' && in_array($fields[$key]['type'], ['text', 'textarea', 'richtext'])) {
                return strip_tags($value);
            }
        }

        return $section->editor_scope_title ?? $section->editor_title;
    }

    public function group(PageSection $section, Page $page): string
    {
        if ($section->is_archived) {
            return 'Earlier layouts';
        }
        if ($page->kind === 'page' && (str_starts_with($section->key, 'footer') || in_array($section->key, ['nav', 'site_public', 'layout_portfolio']) || ($section->key === 'services' && $page->slug !== 'services'))) {
            return 'Shared website content';
        }

        return 'Page content';
    }

    /** Recompute editor membership without changing published order or visibility. */
    public function layout(Page $page, Collection $sections, Collection $blocks): array
    {
        $source = app(PageComposition::class)->source($page);
        $placements = app(ContentPlacement::class)->sections($source);
        $schemas = [];
        foreach ($sections as $section) {
            $schemas[$section->key] = app(EditorSchema::class)->fields($section->key, config('content_modules.'.$section->key.'.fields'), $source);
        }
        $blockSections = [];
        $used = [];
        foreach ($blocks->where('type', 'legacy') as $block) {
            $indexes = $block->data['legacy_indexes'] ?? [];
            $anchors = array_column(array_intersect_key($placements, array_flip($indexes)), 'anchor');
            $blockSections[$block->id] = collect();
            foreach ($sections as $section) {
                if ($this->group($section, $page) !== 'Page content') {
                    continue;
                }
                foreach (collect($schemas[$section->key])->whereIn('anchor', $anchors)->groupBy('anchor', true) as $anchor => $fields) {
                    $copy = clone $section;
                    $copy->setAttribute('editor_anchor', $anchor);
                    $copy->setAttribute('editor_field_keys', $fields->keys()->all());
                    $copy->setAttribute('editor_scope_title', $this->scopeTitle($section->key, $fields->all()));
                    $blockSections[$block->id]->push($copy);
                    foreach ($fields as $key => $field) {
                        if (! $block->trashed()) {
                            $used[$section->key][$key] = true;
                        }
                    }
                }
            }
            if (isset($placements[$indexes[0] ?? null])) {
                $block->anchor = $placements[$indexes[0]]['anchor'];
                if ($page->slug !== 'vapt') {
                    $block->title = $placements[$indexes[0]]['title'];
                }
            }
        }
        $otherSections = collect();
        foreach ($sections as $section) {
            foreach (collect($schemas[$section->key])->except(array_keys($used[$section->key] ?? []))->groupBy('anchor', true) as $anchor => $fields) {
                $copy = clone $section;
                $copy->setAttribute('editor_anchor', $anchor);
                $copy->setAttribute('editor_field_keys', $fields->keys()->all());
                $copy->setAttribute('editor_scope_title', $this->scopeTitle($section->key, $fields->all()));
                $group = $this->group($section, $page);
                if ($group === 'Page content') {
                    $group = $anchor === 'seo-settings' ? 'Page settings' : 'Earlier layouts';
                }
                $copy->setAttribute('editor_category', $group);
                $otherSections->push($copy);
            }
        }

        $seen = [];
        foreach ([...array_values($blockSections), $otherSections] as $group) {
            foreach ($group as $section) {
                $number = $seen[$section->key] ?? 0;
                $section->setAttribute('editor_dom_id', 'section-'.$section->key.($number ? '-'.$section->editor_anchor.'-'.$number : ''));
                $seen[$section->key] = $number + 1;
            }
        }

        return compact('blockSections', 'otherSections');
    }

    public function media(Collection $sections, ?Page $page = null): array
    {
        $media = [];
        $source = $page ? app(PageComposition::class)->source($page) : null;
        foreach ($sections->where('is_archived', false) as $section) {
            $definition = config('content_modules.'.$section->key);
            $schema = app(EditorSchema::class)->fields($section->key, $definition['fields'], $source);
            foreach ($section->contents->whereNull('deleted_at') as $entry) {
                $data = $entry->contentData($definition);
                $title = collect($data)->filter(fn ($value, $key) => is_string($value) && $value !== '' && in_array($definition['fields'][$key]['type'], ['text', 'textarea']))->first() ?: $section->editor_title;
                foreach ($this->mediaFields(app(FrontendContentOrder::class)->fields($section->key, $definition), $data) as $field) {
                    $isLogo = str_contains($field['path'], 'logo') || in_array($section->key, ['shared_clients_clients', 'clients_client_strip_clients', 'shared_about_industries_clients_about_clients']) || ($section->key === 'nav' && $field['path'] === 'img_media');
                    $placement = $schema[explode('.', $field['path'])[0]];
                    $category = $placement['editor_group'];
                    if ($page && $this->group($section, $page) === 'Shared website content') {
                        $category = 'Shared website content / '.$section->editor_title;
                    } elseif (! $placement['editor_used']) {
                        $category = 'Earlier layouts / '.$section->editor_title;
                    }
                    $media[] = $field + ['entry' => $entry, 'section' => $section, 'category' => $category, 'role' => $isLogo ? 'Logo' : ucfirst($field['field']['type']), 'title' => $section->key === 'nav' && $field['path'] === 'img_media' ? 'Website logo' : Str::limit(strip_tags($title), 75)];
                }
            }
        }

        return $media;
    }

    private function mediaFields(array $fields, array $data, string $prefix = ''): array
    {
        $result = [];
        foreach ($fields as $key => $field) {
            $path = $prefix.$key;
            $value = $data[$key] ?? null;
            if (in_array($field['type'], ['image', 'video'])) {
                $result[] = ['path' => $path, 'field' => $field, 'value' => $value ?? ''];
            } elseif ($field['type'] === 'object') {
                $result = array_merge($result, $this->mediaFields($field['fields'], $value ?? [], $path.'.'));
            } elseif ($field['type'] === 'list') {
                foreach ($value ?? [] as $index => $item) {
                    $result = array_merge($result, $this->mediaFields([$index => $field['item']], [$index => $item], $path.'.'));
                }
            }
        }

        return $result;
    }
}
