<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCapacityBuildingLinks2Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building_links_2', [
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Simple, fast setup',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Pre-configured training curriculum',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Full access to the training module library',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Designed with small teams in mind',
            ],
        ]);
    }
}
