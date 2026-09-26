<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptMatrixSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_matrix', [
            [
                'paragraph' => 'Why Cyberlog VAPT',
                'heading' => 'Basic VAPT vs Cyberlog VAPT',
                'th_text' => 'Area',
                'th_text_2' => 'Basic VAPT',
                'th_text_3' => 'Cyberlog VAPT',
                'icon' => 'fas fa-circle-check me-2',
            ],
        ]);
    }
}
