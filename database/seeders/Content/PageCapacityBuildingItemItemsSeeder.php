<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCapacityBuildingItemItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building_item_items', [
            [
                'item_0' => 'fa-users',
                'item_1' => 'Human Risk',
                'item_2' => 'People remain the most targeted attack surface in any organization.',
            ],
            [
                'item_0' => 'fa-circle-exclamation',
                'item_1' => 'Costly Mistakes',
                'item_2' => 'A single untrained click can undo millions spent on technical defenses.',
            ],
            [
                'item_0' => 'fa-shield-halved',
                'item_1' => 'Active Defense',
                'item_2' => 'Awareness training turns employees into defenders, not liabilities.',
            ],
            [
                'item_0' => 'fa-repeat',
                'item_1' => 'Lasting Behavior',
                'item_2' => 'Practical, scenario-based learning builds habits that stick beyond the session.',
            ],
        ]);
    }
}
