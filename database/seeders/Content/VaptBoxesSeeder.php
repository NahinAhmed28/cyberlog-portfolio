<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptBoxesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_boxes', [
            [
                'paragraph' => 'Testing Approaches',
                'heading' => 'Black Box, Grey Box & White Box Testing',
                'paragraph_2' => 'Choose the testing approach based on available access, project goal, and required assessment depth.',
                'label' => 'Conditions:',
                'label_2' => 'Value:',
            ],
        ]);
    }
}
