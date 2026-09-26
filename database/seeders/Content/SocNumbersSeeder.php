<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocNumbersSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_numbers', [
            [
                'paragraph' => 'Operational Impact',
                'heading' => 'Cyberlog SOC',
                'paragraph_2' => 'Managed Services by the Numbers',
            ],
        ]);
    }
}
