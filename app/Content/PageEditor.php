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

    public function group(PageSection $section, Page $page): string
    {
        if ($section->is_archived) {
            return 'Earlier layouts';
        }
        if ($page->kind === 'page' && (str_starts_with($section->key, 'footer') || in_array($section->key, ['nav', 'site_public', 'layout_portfolio', 'threat_feed_events', 'soc_live_events']))) {
            return 'Shared website content';
        }

        return 'Page content';
    }

    public function media(Collection $sections): array
    {
        $media = [];
        foreach ($sections->where('is_archived', false) as $section) {
            $definition = config('content_modules.'.$section->key);
            foreach ($section->contents->whereNull('deleted_at') as $entry) {
                $data = $entry->contentData($definition);
                $title = collect($data)->filter(fn ($value, $key) => is_string($value) && $value !== '' && in_array($definition['fields'][$key]['type'], ['text', 'textarea']))->first() ?: $section->editor_title;
                foreach ($this->mediaFields($definition['fields'], $data) as $field) {
                    $isLogo = str_contains($field['path'], 'logo') || in_array($section->key, ['shared_clients_clients', 'clients_client_strip_clients', 'shared_about_industries_clients_about_clients']) || ($section->key === 'nav' && $field['path'] === 'img_media');
                    $media[] = $field + ['entry' => $entry, 'section' => $section, 'role' => $isLogo ? 'Logo' : ucfirst($field['field']['type']), 'title' => $section->key === 'nav' && $field['path'] === 'img_media' ? 'Website logo' : Str::limit(strip_tags($title), 75)];
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
