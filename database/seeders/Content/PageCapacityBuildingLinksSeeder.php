<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCapacityBuildingLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building_links', [
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Department-specific training tracks and reporting',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Dedicated program coordinator',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Custom phishing simulation campaigns',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Multiple admin access',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Designed to support large organizations',
            ],
        ]);
    }
}
