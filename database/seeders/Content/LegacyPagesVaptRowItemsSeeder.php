<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVaptRowItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vapt_row_items', [
            [
                'item_0' => 'Automated Vulnerability Scanning',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Manual Exploitation',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Business Logic Testing',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Social Engineering / Phishing',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Lateral Movement Simulation',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Detailed Remediation Report',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Free Re-test',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
        ]);
    }
}
