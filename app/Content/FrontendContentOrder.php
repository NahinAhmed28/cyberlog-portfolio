<?php

namespace App\Content;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Route;

class FrontendContentOrder
{
    private array $sources = [];

    public function sections(Page $page, Collection $sections): Collection
    {
        if (! $page->path) {
            return $sections;
        }
        $route = Route::getRoutes()->match(Request::create($page->path));
        $view = $route->defaults['view'] ?? null;
        $source = $view ? $this->source(resource_path('views/'.str_replace('.', '/', $view).'.blade.php')) : '';

        return $sections->sortBy(function ($section) use ($source) {
            preg_match('~content(?:_items)?\(\s*[\'"]'.preg_quote($section->key, '~').'[\'"]~', $source, $match, PREG_OFFSET_CAPTURE);

            return $match[0][1] ?? PHP_INT_MAX;
        });
    }

    public function fields(string $module, array $definition): array
    {
        $source = $this->source(base_path($definition['source']));
        $positions = [];
        preg_match_all('~content\(\s*[\'"]'.preg_quote($module, '~').'[\'"]\s*,\s*[\'"]([^\'"]+)[\'"]~', $source, $matches, PREG_OFFSET_CAPTURE);
        foreach ($matches[1] as [$key, $offset]) {
            $positions[$key] ??= $offset;
        }
        // Repeated cards use a local variable rather than content() for each field.
        preg_match_all('~content_items\(\s*[\'"]'.preg_quote($module, '~').'[\'"]\s*\)\s+as\s+\$(\w+)~', $source, $bindings, PREG_OFFSET_CAPTURE);
        foreach ($bindings[1] as [$variable]) {
            preg_match_all('~\$'.preg_quote($variable, '~').'\[([\'"]?)(\w+)\1\]~', $source, $accesses, PREG_OFFSET_CAPTURE);
            foreach ($accesses[2] as [$key, $offset]) {
                $key = ctype_digit($key) ? 'item_'.$key : $key;
                $positions[$key] ??= $offset;
            }
        }

        return collect($definition['fields'])->sortBy(fn ($field, $key) => $positions[$key] ?? PHP_INT_MAX)->all();
    }

    private function source(string $path, array $parents = []): string
    {
        if (in_array($path, $parents) || ! is_file($path)) {
            return '';
        }
        if (isset($this->sources[$path])) {
            return $this->sources[$path];
        }
        $parents[] = $path;
        $source = file_get_contents($path);
        $source = preg_replace('~\{\{--.*?--\}\}|<!--.*?-->~s', '', $source);

        return $this->sources[$path] = preg_replace_callback('~@include(?:If|When|Unless)?\(\s*[\'"]([^\'"]+)[\'"]~', function ($match) use ($parents) {
            return $this->source(resource_path('views/'.str_replace('.', '/', $match[1]).'.blade.php'), $parents).$match[0];
        }, $source);
    }
}
