<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptPostureSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_posture', [
            [
                'label' => 'VAPT',
            ],
        ]);
    }
}
