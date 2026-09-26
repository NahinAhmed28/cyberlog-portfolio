<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeThreatsThFloatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_threats_th_floats', [
            [
                'icon' => 'fas fa-screwdriver-wrench',
                'label' => 'Client is remediating',
            ],
            [
                'icon' => 'fas fa-magnifying-glass',
                'label' => 'Client is investigating',
            ],
        ]);
    }
}
