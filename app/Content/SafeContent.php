<?php

namespace App\Content;

use DOMDocument;
use DOMElement;
use DOMNode;

class SafeContent
{
    public static function html(string $value): string
    {
        $document = new DOMDocument;
        $previous = libxml_use_internal_errors(true);
        $document->loadHTML('<?xml encoding="utf-8" ?><div id="content-root">'.$value.'</div>', LIBXML_HTML_NOIMPLIED | LIBXML_HTML_NODEFDTD | LIBXML_NONET);
        libxml_clear_errors();
        libxml_use_internal_errors($previous);
        $root = $document->getElementById('content-root');
        if (! $root) {
            return '';
        }
        self::cleanChildren($root);
        $result = '';
        foreach ($root->childNodes as $child) {
            $result .= $document->saveHTML($child);
        }

        return $result;
    }

    private static function cleanChildren(DOMNode $parent): void
    {
        foreach (iterator_to_array($parent->childNodes) as $node) {
            if (! $node instanceof DOMElement) {
                continue;
            }
            if (! in_array(strtolower($node->tagName), ['p', 'br', 'strong', 'b', 'em', 'i', 'span', 'ul', 'ol', 'li', 'small', 'sup', 'sub'], true)) {
                $parent->replaceChild($node->ownerDocument->createTextNode($node->textContent), $node);
                continue;
            }
            foreach (iterator_to_array($node->attributes) as $attribute) {
                if ($attribute->name !== 'class' || ! preg_match('/^[a-zA-Z0-9 _-]*$/', $attribute->value)) {
                    $node->removeAttribute($attribute->name);
                }
            }
            self::cleanChildren($node);
        }
    }

    public static function safeUrl(?string $value): bool
    {
        if ($value === null || $value === '') {
            return true;
        }
        if (preg_match('/[\x00-\x20\\\\<>"\']/', $value) || str_starts_with($value, '//')) {
            return false;
        }
        if (preg_match('/^(https?:\/\/|mailto:|tel:|\/|#)/i', $value)) {
            return true;
        }

        return ! str_contains($value, ':') && ! str_contains($value, '..');
    }
}
