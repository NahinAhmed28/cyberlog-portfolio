<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocComparisonSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_comparison', [
            [
                'paragraph' => 'Comparison',
                'heading' => 'Which SOC Model Delivers Real Value?',
                'th_text' => 'SOC Model',
                'th_text_2' => 'Setup Time',
                'th_text_3' => 'MTTR (hrs)',
                'th_text_4' => 'Threats Stopped',
                'th_text_5' => 'SLA / KPI',
            ],
        ]);
    }
}
