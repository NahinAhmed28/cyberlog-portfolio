<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeMItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_m_items', [
            [
                'item_0' => '500+',
                'item_1' => 'Users Protected Across Managed Services',
            ],
            [
                'item_0' => '14+',
                'item_1' => 'Enterprise &amp; Government Clients',
            ],
            [
                'item_0' => '24/7',
                'item_1' => 'Security Operations Coverage',
            ],
            [
                'item_0' => '93',
                'item_1' => 'ISO 27001 Controls Implemented',
            ],
        ]);
    }
}
