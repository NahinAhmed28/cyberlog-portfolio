<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeDefendDaoStatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_defend_dao_stats', [
            [
                'div_data_count' => 45,
                'div_text' => '45',
                'div_text_2' => '3rd-party',
            ],
            [
                'div_data_count' => 56,
                'div_text' => '56',
                'div_text_2' => '4th-party',
            ],
            [
                'div_data_count' => 90,
                'div_text' => '90',
                'div_text_2' => '5th-party',
            ],
            [
                'div_data_count' => 102,
                'div_text' => '102',
                'div_text_2' => '6th-party',
            ],
        ]);
    }
}
