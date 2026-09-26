<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptHeroStepItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_hero_step_items', [
            [
                'value' => 'Recon',
            ],
            [
                'value' => 'Scan',
            ],
            [
                'value' => 'Exploit',
            ],
            [
                'value' => 'Report',
            ],
            [
                'value' => 'Retest',
            ],
        ]);
    }
}
