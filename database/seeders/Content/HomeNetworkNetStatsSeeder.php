<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeNetworkNetStatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_network_net_stats', [
            [
                'div_data_count' => 45,
                'div_text' => '45',
                'div_text_2' => 'Endpoints',
            ],
            [
                'div_data_count' => 56,
                'div_text' => '56',
                'div_text_2' => 'Servers',
            ],
            [
                'div_data_count' => 90,
                'div_text' => '90',
                'div_text_2' => 'Applications',
            ],
            [
                'div_data_count' => 102,
                'div_text' => '102',
                'div_text_2' => 'Cloud Assets',
            ],
        ]);
    }
}
