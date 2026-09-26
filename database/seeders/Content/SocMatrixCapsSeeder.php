<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocMatrixCapsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_matrix_caps', [
            [
                'item_0' => '24/7 Monitoring & Triage',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'SIEM Management',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Compliance Reporting',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Threat Intelligence Feeds',
                'item_1' => 0,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Managed Detection & Response (MDR)',
                'item_1' => 0,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Proactive Threat Hunting',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Incident Response Retainer',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Dedicated SOC Analyst',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
        ]);
    }
}
