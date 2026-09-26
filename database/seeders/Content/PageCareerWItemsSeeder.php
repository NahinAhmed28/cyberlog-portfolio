<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCareerWItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_career_w_items', [
            [
                'item_0' => 'fa-solid fa-magnifying-glass',
                'item_1' => 'Transparency',
                'item_2' => '',
            ],
            [
                'item_0' => 'fa-solid fa-bullseye',
                'item_1' => 'Precision',
                'item_2' => '',
            ],
            [
                'item_0' => 'fa-solid fa-ribbon',
                'item_1' => 'Excellence',
                'item_2' => '',
            ],
        ]);
    }
}
