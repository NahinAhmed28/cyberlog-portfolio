<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VcisoHeroRightNodesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vciso_hero_right_nodes', [
            [
                'icon' => 'fa-bug',
                'label' => 'VAPT (Vulnerability Assessment & Penetration Testing)',
                'x' => 84,
                'y' => 18,
            ],
            [
                'icon' => 'fa-satellite-dish',
                'label' => 'Threat Intelligence',
                'x' => 91,
                'y' => 41,
            ],
            [
                'icon' => 'fa-triangle-exclamation',
                'label' => 'Risk Assessment',
                'x' => 86,
                'y' => 66,
            ],
            [
                'icon' => 'fa-graduation-cap',
                'label' => 'Capacity Building (Training)',
                'x' => 73,
                'y' => 84,
            ],
        ]);
    }
}
