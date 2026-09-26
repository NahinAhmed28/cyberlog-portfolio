<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptBenefitsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_benefits', [
            [
                'paragraph' => 'Why Cyberlog VAPT',
                'heading' => 'Benefits',
            ],
        ]);
    }
}
