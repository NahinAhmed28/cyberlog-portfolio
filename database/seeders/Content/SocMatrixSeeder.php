<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocMatrixSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_matrix', [
            [
                'paragraph' => 'Managed SOC Coverage',
                'heading' => 'What\'s Included in Each Tier',
                'paragraph_2' => 'Choose the level of monitoring, response, and analyst support your environment requires.',
                'th_text' => 'Capability',
                'span_aria_label' => 'Included',
                'icon' => 'fas fa-check',
                'span_aria_label_2' => 'Not included',
            ],
        ]);
    }
}
