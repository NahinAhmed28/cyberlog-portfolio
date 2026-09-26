<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCapacityBuildingWItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building_w_items', [
            [
                'item_0' => 'fa-clipboard-list',
                'item_1' => 'Baseline',
                'item_2' => 'Phishing simulation and awareness assessment to establish your starting point.',
            ],
            [
                'item_0' => 'fa-chalkboard-user',
                'item_1' => 'Train',
                'item_2' => 'Role-based, bite-sized modules covering real-world threats and best practices.',
            ],
            [
                'item_0' => 'fa-fish',
                'item_1' => 'Simulate',
                'item_2' => 'Ongoing phishing exercises that reinforce learning in real-world context.',
            ],
            [
                'item_0' => 'fa-chart-simple',
                'item_1' => 'Track',
                'item_2' => 'Post-training metrics that prove awareness is improving over time.',
            ],
        ]);
    }
}
