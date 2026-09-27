<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class StaticContentParityTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    public function test_seeded_pages_preserve_original_static_copy_and_media(): void
    {
        $this->withoutExceptionHandling();
        $urls = ['/', '/clients', '/services', '/services/soc', '/services/vapt', '/services/it-audit', '/services/capacity-building', '/services/secure-code-review', '/services/ai-and-automation', '/services/offensive-security-services', '/services/defensive-security-services', '/vciso', '/about', '/contact', '/career', '/our-team'];
        // Captured from static templates at commit 551ec1e before the CMS conversion.
        $baseline = json_decode(file_get_contents(base_path('tests/Fixtures/static-content.json')), true, flags: JSON_THROW_ON_ERROR);
        $actual = [];
        foreach ($urls as $url) {
            $actual[$url] = $this->extract($this->get($url)->assertOk()->getContent());
        }
        foreach ($baseline as &$page) {
            $page['text'] = preg_replace('/\s+/u', '', $page['text']);
        }
        unset($page);
        $this->assertSame($baseline, $actual);
    }

    private function extract(string $html): array
    {
        $dom = new \DOMDocument;
        @$dom->loadHTML('<?xml encoding="UTF-8">'.$html);
        $xpath = new \DOMXPath($dom);
        foreach ($xpath->query('//script|//style') as $node) {
            $node->parentNode->removeChild($node);
        }
        $text = preg_replace('/\s+/u', '', $dom->textContent);
        $media = [];
        foreach ($xpath->query('//img/@src|//video/@src|//video/@poster|//source/@src') as $node) {
            $media[] = $node->nodeValue;
        }
        sort($media);

        return ['text' => trim($text), 'media' => $media];
    }
}
