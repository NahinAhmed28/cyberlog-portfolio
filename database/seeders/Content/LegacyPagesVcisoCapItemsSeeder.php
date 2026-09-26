<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVcisoCapItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vciso_cap_items', [
            [
                'item_0' => 'fa-brain',
                'item_1' => 'Cyber Threat Intelligence',
            ],
            [
                'item_0' => 'fa-bug',
                'item_1' => 'Penetration Testing',
            ],
            [
                'item_0' => 'fa-shield-virus',
                'item_1' => 'Digital Risk Protection',
            ],
            [
                'item_0' => 'fa-magnifying-glass',
                'item_1' => 'Vulnerability Intelligence',
            ],
        ]);
    }
}
