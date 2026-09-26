<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocMatrixTiersSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_matrix_tiers', [
            [
                'value' => 'Essential',
            ],
            [
                'value' => 'Advanced',
            ],
            [
                'value' => 'Enterprise',
            ],
        ]);
    }
}
