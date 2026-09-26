<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVaptLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vapt_links', [
            [
                'div_text' => '360°',
                'div_text_2' => 'Security Risk Review',
            ],
            [
                'div_text' => '10+',
                'div_text_2' => 'High-Priority Risks Validated',
            ],
        ]);
    }
}
