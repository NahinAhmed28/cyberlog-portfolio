<?php

namespace App\Content;

use App\Models\NavigationItem;
use App\Models\Page;

class AdminNavigation
{
    public function items(): array
    {
        $pages = Page::where('kind', 'page')->orderBy('sort_order')->get();
        $used = [];
        $current = request()->route('page')?->slug ?? request('page');
        $resolve = function ($item) use ($pages, &$used, $current) {
            $url = $item->url ?? '';
            $host = parse_url($url, PHP_URL_HOST);
            $path = parse_url($url, PHP_URL_PATH);
            $local = ! $host || in_array($host, [parse_url(url('/'), PHP_URL_HOST), parse_url(config('app.url'), PHP_URL_HOST)], true);
            $basePath = rtrim(parse_url(url('/'), PHP_URL_PATH) ?? '', '/');
            if ($host && $host === parse_url(url('/'), PHP_URL_HOST) && $basePath && str_starts_with($path ?? '', $basePath.'/')) {
                $path = substr($path, strlen($basePath));
            }
            $page = $local && $path
                ? $pages->first(fn ($page) => rtrim($page->path, '/') === rtrim($path, '/')) : null;
            if ($page) {
                $used[$page->id] = true;
            }

            return ['label' => $item->label, 'page' => $page, 'active' => $page && $current === $page->slug,
                'url' => $page ? route('admin.pages.show', $page) : route('admin.navigation.edit', $item)];
        };
        $items = [];
        foreach (NavigationItem::publishedMenu() as $item) {
            if ($item->type === 'divider') {
                continue;
            }
            if ($item->type === 'dropdown') {
                $children = $item->children->map(fn ($child) => $child->type === 'divider' ? ['divider' => true] : $resolve($child))->all();
                $items[] = ['label' => $item->label, 'children' => $children, 'active' => collect($children)->contains('active', true)];
            } else {
                $items[] = $resolve($item);
            }
        }

        return ['items' => $items, 'otherPages' => $pages->reject(fn ($page) => isset($used[$page->id])), 'current' => $current];
    }
}
