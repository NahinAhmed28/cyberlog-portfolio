<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocRowItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_row_items', [
            [
                'item_0' => '24/7 Monitoring &amp; Triage',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'SIEM Management',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Threat Intelligence Feeds',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Managed Detection &amp; Response (MDR)',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Proactive Threat Hunting',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Incident Response Retainer',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Dedicated SOC Analyst',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
        ]);
    }
}
