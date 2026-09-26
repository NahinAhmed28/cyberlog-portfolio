<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeHeroDriftSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_hero_drift', [
            [
                'icon' => 'fas fa-bug',
                'label' => 'Penetration Testing',
            ],
            [
                'icon' => 'fas fa-desktop',
                'label' => 'Security Operations Center (SOC)',
            ],
            [
                'icon' => 'fas fa-clipboard-check',
                'label' => 'Security Audit & Training',
            ],
            [
                'icon' => 'fas fa-robot',
                'label' => 'AI Automation',
            ],
        ]);
    }
}
