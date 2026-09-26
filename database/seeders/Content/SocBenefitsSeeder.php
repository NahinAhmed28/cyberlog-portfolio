<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocBenefitsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_benefits', [
            [
                'paragraph' => 'Why Cyberlog SOC',
                'heading' => 'SOC Benefits',
            ],
        ]);
    }
}
