<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VcisoHeroLeftNodesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vciso_hero_left_nodes', [
            [
                'icon' => 'fa-desktop',
                'label' => 'Security Operations Center (SOC)',
                'x' => 16,
                'y' => 18,
            ],
            [
                'icon' => 'fa-bolt',
                'label' => 'Incident Response',
                'x' => 9,
                'y' => 41,
            ],
            [
                'icon' => 'fa-shield-virus',
                'label' => 'Firewall Management',
                'x' => 14,
                'y' => 66,
            ],
            [
                'icon' => 'fa-database',
                'label' => 'Data Protection & Backup',
                'x' => 27,
                'y' => 84,
            ],
        ]);
    }
}
