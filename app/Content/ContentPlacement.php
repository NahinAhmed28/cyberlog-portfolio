<?php

namespace App\Content;

use Illuminate\Support\Str;

/** Describes where content is consumed, rather than where a query happens to run. */
class ContentPlacement
{
    private array $sources = [];

    private array $placements = [];

    public function source(string $path, array $parents = []): string
    {
        if (in_array($path, $parents) || ! is_file($path)) {
            return '';
        }
        if (isset($this->sources[$path])) {
            return $this->sources[$path];
        }
        $parents[] = $path;
        $source = preg_replace('~\{\{--.*?--\}\}|<!--.*?-->~s', '', file_get_contents($path));
        $expanded = '';
        $offset = 0;
        while (preg_match('~@include(?:If)?\(\s*([\'"])([^\'"]+)\1~', $source, $match, PREG_OFFSET_CAPTURE, $offset)) {
            $start = $match[0][1];
            $opening = strpos($source, '(', $start);
            $end = $this->callEnd($source, $opening);
            if ($end === null) {
                break;
            }
            $arguments = $this->arguments(substr($source, $opening + 1, $end - $opening - 2));
            $partial = $this->source(resource_path('views/'.str_replace('.', '/', $match[2][0]).'.blade.php'), $parents);
            $bindings = trim($arguments[1] ?? '');
            if (str_starts_with($bindings, '[') && str_ends_with($bindings, ']')) {
                foreach ($this->arguments(substr($bindings, 1, -1)) as $binding) {
                    if (preg_match('~^\s*([\'"])(\w+)\1\s*=>\s*(.+)$~s', $binding, $parameter)) {
                        // Follow include parameters into the actual hero/CTA/card using them.
                        $partial = preg_replace_callback('~\$'.preg_quote($parameter[2], '~').'\b~', fn () => '('.$parameter[3].')', $partial);
                    }
                }
            }
            $expanded .= substr($source, $offset, $start - $offset).$partial;
            $offset = $end;
        }

        return $this->sources[$path] = $expanded.substr($source, $offset);
    }

    private function callEnd(string $source, int $opening): ?int
    {
        $tokens = token_get_all('<?php '.substr($source, $opening + 1));
        array_shift($tokens);
        $depth = 1;
        $position = $opening + 1;
        foreach ($tokens as $token) {
            $text = is_array($token) ? $token[1] : $token;
            if ($token === '(') {
                $depth++;
            } elseif ($token === ')' && --$depth === 0) {
                return $position + 1;
            }
            $position += strlen($text);
        }

        return null;
    }

    private function arguments(string $expression): array
    {
        $tokens = token_get_all('<?php '.$expression);
        array_shift($tokens);
        $parts = [];
        $part = '';
        $depth = 0;
        foreach ($tokens as $token) {
            $text = is_array($token) ? $token[1] : $token;
            if (is_string($token) && in_array($token, ['(', '[', '{'])) {
                $depth++;
            } elseif (is_string($token) && in_array($token, [')', ']', '}'])) {
                $depth--;
            }
            if ($token === ',' && $depth === 0) {
                $parts[] = trim($part);
                $part = '';
            } else {
                $part .= $text;
            }
        }
        $parts[] = trim($part);

        return $parts;
    }

    public function references(string $source): array
    {
        preg_match_all('~\bcontent(_items)?\(\s*[\'"]([^\'"]+)[\'"](?:\s*,\s*[\'"]([^\'"]+)[\'"])?~', $source, $matches, PREG_SET_ORDER);

        return array_map(fn ($match) => ['module' => $match[2], 'field' => empty($match[1]) ? ($match[3] ?? null) : null], $matches);
    }

    public function sections(string $source): array
    {
        $cacheKey = sha1($source);
        if (isset($this->placements[$cacheKey])) {
            return $this->placements[$cacheKey];
        }
        $dependencies = $this->dependencies($source);
        $sections = [];
        $anchors = [];
        foreach (app(PageComposition::class)->fragments($source) as $index => $fragment) {
            preg_match('~\bid="([^"{]+)"~', strstr($fragment['html'], '>', true), $id);
            $anchor = $id[1] ?? 'page-section-'.($index + 1);
            if (isset($anchors[$anchor])) {
                $anchor .= '-'.($index + 1);
            }
            $anchors[$anchor] = true;
            $modules = [];
            $fields = [];
            foreach ($this->references($fragment['html']) as $reference) {
                $modules[$reference['module']] = true;
                if ($reference['field'] !== null) {
                    $fields[$reference['module']][$reference['field']] = true;
                }
            }
            preg_match_all('~\$(\w+)\b~', $fragment['html'], $variables);
            foreach ($variables[1] as $variable) {
                foreach ($dependencies[$variable] ?? [] as $module) {
                    $modules[$module] = true;
                }
            }
            $hero = preg_match('~^<header\b|\bclass=[\'"][^\'"]*\bcl-[\w-]*hero\b~i', strstr($fragment['html'], '>', true));
            $title = $hero ? 'Hero Section' : match ($anchor) {
                'clients' => 'Our Clients',
                'client-websites' => 'Client Website Stories',
                'trusted-by' => 'Trusted Clients',
                default => isset($id[1]) ? Str::headline($id[1]) : $this->moduleTitle(array_keys($modules)),
            };
            $sections[] = $fragment + ['index' => $index, 'anchor' => $anchor, 'title' => $title, 'modules' => array_keys($modules), 'fields' => $fields];
        }

        return $this->placements[$cacheKey] = $sections;
    }

    private function moduleTitle(array $modules): string
    {
        if (in_array('shared_talk_to_expert', $modules)) {
            return 'Contact / CTA Section';
        }
        $module = $modules[0] ?? null;

        return $module ? app(PageEditor::class)->sectionTitle($module, config('content_modules.'.$module.'.title', Str::headline($module))) : 'Section content';
    }

    private function dependencies(string $source): array
    {
        preg_match_all('~\$(\w+)\s*=(?!=|>)\s*([^;]+);~s', $source, $assignments, PREG_SET_ORDER);
        $dependencies = [];
        for ($pass = 0; $pass < 10; $pass++) {
            $before = $dependencies;
            foreach ($assignments as $assignment) {
                $modules = array_column($this->references($assignment[2]), 'module');
                preg_match_all('~\$(\w+)\b~', $assignment[2], $variables);
                foreach ($variables[1] as $variable) {
                    $modules = array_merge($modules, $dependencies[$variable] ?? []);
                }
                $dependencies[$assignment[1]] = array_values(array_unique(array_merge($dependencies[$assignment[1]] ?? [], $modules)));
            }
            if ($before === $dependencies) {
                break;
            }
        }

        return $dependencies;
    }
}
