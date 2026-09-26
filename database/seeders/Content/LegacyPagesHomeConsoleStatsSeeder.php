<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeConsoleStatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_console_stats', [
            [
                'div_data_count' => 500,
                'div_data_suffix' => '+',
                'div_text' => '500+',
                'div_text_2' => 'Users protected',
            ],
            [
                'div_data_count' => 24,
                'div_data_suffix' => '/7',
                'div_text' => '24/7',
                'div_text_2' => 'Monitoring',
            ],
        ]);
    }
}
