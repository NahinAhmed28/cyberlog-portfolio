<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCareerWItems2Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_career_w_items_2', [
            [
                'item_0' => 'fa-graduation-cap',
                'item_1' => 'Continuous learning',
                'item_2' => 'Certifications, labs, and mentorship to keep your skills sharp.',
            ],
            [
                'item_0' => 'fa-people-group',
                'item_1' => 'Real impact',
                'item_2' => 'Defend national infrastructure, finance, and government organizations.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Balance &amp; growth',
                'item_2' => 'A supportive culture with room to grow into leadership.',
            ],
        ]);
    }
}
