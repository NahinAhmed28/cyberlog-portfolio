<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCareerJobItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_career_job_items', [
            [
                'item_0' => 'SOC Analyst (L1/L2)',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Security Operations',
            ],
            [
                'item_0' => 'Penetration Tester',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Offensive Security',
            ],
            [
                'item_0' => 'GRC / ISO 27001 Consultant',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Compliance',
            ],
            [
                'item_0' => 'Incident Response Engineer',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Defense Services',
            ],
            [
                'item_0' => 'Security Awareness Trainer',
                'item_1' => 'Dhaka · Contract',
                'item_2' => 'Capacity Building',
            ],
        ]);
    }
}
