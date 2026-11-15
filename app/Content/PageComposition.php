<?php

namespace App\Content;

use App\Models\Page;
use App\Models\PageBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

class PageComposition
{
    public function source(Page $page): string
    {
        if ($page->is_custom || ! $page->path) {
            return '';
        }
        $route = Route::getRoutes()->match(Request::create($page->path));
        $view = $route->defaults['view'] ?? null;

        return $view ? $this->expand($view) : '';
    }

    private function expand(string $view, array $seen = []): string
    {
        if (in_array($view, $seen)) {
            return '';
        }
        $path = resource_path('views/'.str_replace('.', '/', $view).'.blade.php');
        if (! is_file($path)) {
            return '';
        }
        $seen[] = $view;
        $source = file_get_contents($path);
        $source = preg_replace('~\{\{--.*?--\}\}|<!--.*?-->~s', '', $source);

        return preg_replace_callback('~@include(?:If)?\(\s*[\'"]([^\'"]+)[\'"]~', fn ($m) => $this->expand($m[1], $seen), $source);
    }

    /** Offsets allow existing markup to pass through unchanged; no DOM reserialization. */
    public function fragments(string $html): array
    {
        preg_match_all('~</?(?:section|header)\b[^>]*>~i', $html, $tags, PREG_OFFSET_CAPTURE);
        $depth = 0;
        $fragments = [];
        foreach ($tags[0] as [$tag, $offset]) {
            if (str_starts_with($tag, '</')) {
                if ($depth === 0) {
                    continue;
                }
                if (--$depth === 0) {
                    $fragments[] = ['start' => $start, 'end' => $offset + strlen($tag), 'html' => substr($html, $start, $offset + strlen($tag) - $start)];
                }
            } else {
                if ($depth++ === 0) {
                    $start = $offset;
                }
            }
        }

        return $fragments;
    }

    public function initialize(Page $page): void
    {
        if ($page->is_custom || PageBlock::withTrashed()->where('page_id', $page->id)->exists()) {
            return;
        }
        $source = $this->source($page);
        $fragments = $this->fragments($source);
        $outsideModules = [];
        preg_match_all('~content(?:_items)?\(\s*[\'"]([^\'"]+)[\'"]~', $source, $allModules, PREG_OFFSET_CAPTURE);
        foreach ($allModules[1] as [$key, $offset]) {
            $nearest = 0;
            foreach ($fragments as $i => $fragment) {
                if ($offset >= $fragment['start']) {
                    $nearest = $i;
                }
                if ($offset >= $fragment['start'] && $offset < $fragment['end']) {
                    continue 2;
                }
            }
            $outsideModules[$nearest][] = $key;
        }
        $vapt = ['Hero Section', 'Our Clients', 'VAPT Services & Statistics', 'VAPT Services & Statistics', 'VAPT Cost Calculator', 'VAPT Comparison', 'Testing Approaches', 'VAPT Benefits', 'Client Feedback & Ratings', 'Contact / CTA Section'];
        foreach ($fragments as $index => $fragment) {
            preg_match_all('~content(?:_items)?\(\s*[\'"]([^\'"]+)[\'"]~', $fragment['html'], $modules);
            $keys = array_values(array_unique(array_merge($modules[1], $outsideModules[$index] ?? [])));
            preg_match('~\bid="([^"{]+)"~', $fragment['html'], $id);
            $anchor = $id[1] ?? 'page-section-'.($index + 1);
            $title = $index === 0 ? 'Hero Section' : Str::headline($anchor);
            if ($keys && ! isset($id[1])) {
                $title = app(PageEditor::class)->sectionTitle($keys[0], config('content_modules.'.$keys[0].'.title', $title));
            }
            if ($page->path === '/services/vapt') {
                $title = $vapt[$index] ?? $title;
            }
            // The two adjacent legacy VAPT sections remain visually unchanged in one editor panel.
            $previous = PageBlock::where('page_id', $page->id)->orderByDesc('sort_order')->first();
            if ($page->path === '/services/vapt' && $index === 3 && $previous) {
                $previous->update(['data' => ['legacy_indexes' => [2, 3], 'modules' => array_values(array_unique(array_merge($previous->data['modules'], $keys)))]]);

                continue;
            }
            PageBlock::create(['page_id' => $page->id, 'type' => 'legacy', 'title' => $title, 'anchor' => $anchor, 'data' => ['legacy_indexes' => [$index], 'modules' => $keys], 'sort_order' => ($index + 1) * 10]);
        }
    }

    public function render(string $html): string
    {
        $page = Page::forCurrentRequest();
        if (! $page) {
            return $html;
        }
        $blocks = PageBlock::where('page_id', $page->id)->orderBy('sort_order')->orderBy('id')->get();
        if ($blocks->isEmpty() && ! $page->is_custom && ! PageBlock::withTrashed()->where('page_id', $page->id)->exists()) {
            return $html;
        }
        $fragments = $this->fragments($html);
        // Add stable anchors only where the legacy template has no ID.
        foreach (array_reverse($fragments, true) as $index => $fragment) {
            $openingEnd = strpos($fragment['html'], '>');
            $opening = substr($fragment['html'], 0, $openingEnd);
            if (! preg_match('/\bid\s*=/', $opening)) {
                $html = substr_replace($html, ' id="page-section-'.($index + 1).'"', $fragment['start'] + $openingEnd, 0);
            }
        }
        $fragments = $this->fragments($html);
        $rendered = '';
        $usedIndexes = [];
        foreach ($blocks->where('is_visible', true) as $block) {
            if ($block->type === 'legacy') {
                foreach ($block->data['legacy_indexes'] ?? [] as $index) {
                    if (isset($fragments[$index])) {
                        $fragmentHtml = $fragments[$index]['html'];
                        if (isset($usedIndexes[$index])) {
                            preg_match_all('/\bid="([^"\s]+)"/', $fragmentHtml, $ids);
                            foreach ($ids[1] as $id) {
                                $fragmentHtml = str_replace(['id="'.$id.'"', 'href="#'.$id.'"'], ['id="'.$id.'-copy-'.$block->id.'"', 'href="#'.$id.'-copy-'.$block->id.'"'], $fragmentHtml);
                            }
                        }
                        $usedIndexes[$index] = true;
                        $rendered .= $fragmentHtml;
                    }
                }
            } else {
                $rendered .= view('frontend.public.partials.page-block', ['block' => $block])->render();
            }
        }
        if (! $fragments) {
            return $html.$rendered;
        }
        // Preserve the original inter-section whitespace and scripts when nothing changed.
        $originalIndexes = [];
        foreach ($blocks as $block) {
            if ($block->type !== 'legacy' || ! $block->is_visible) {
                $originalIndexes = null;
                break;
            }
            array_push($originalIndexes, ...($block->data['legacy_indexes'] ?? []));
        }
        if ($originalIndexes === range(0, count($fragments) - 1)) {
            return $html;
        }
        // Keep content outside sections (including calculator scripts) in its original order.
        $extras = '';
        for ($i = 1; $i < count($fragments); $i++) {
            $extras .= substr($html, $fragments[$i - 1]['end'], $fragments[$i]['start'] - $fragments[$i - 1]['end']);
        }

        return substr($html, 0, $fragments[0]['start']).$rendered.$extras.substr($html, end($fragments)['end']);
    }
}
