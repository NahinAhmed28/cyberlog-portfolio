<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptSuccessVaptSuccessStatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_success_vapt_success_stats', [
            [
                'label' => '360',
                'label_2' => 'Security risk review',
            ],
            [
                'label' => '10+',
                'label_2' => 'High-priority risks validated',
            ],
            [
                'label' => '100%',
                'label_2' => 'Actionable remediation plan',
            ],
        ]);
    }
}
