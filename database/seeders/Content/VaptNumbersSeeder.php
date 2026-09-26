<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptNumbersSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_numbers', [
            [
                'section_aria_label' => 'VAPT delivery metrics',
            ],
        ]);
    }
}
