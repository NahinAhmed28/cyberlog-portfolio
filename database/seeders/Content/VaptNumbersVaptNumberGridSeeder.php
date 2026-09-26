<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptNumbersVaptNumberGridSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_numbers_vapt_number_grid', [
            [
                'label' => '160+',
                'label_2' => 'Tests annually',
            ],
            [
                'label' => '1,440+',
                'label_2' => 'Vulnerabilities detected per year',
            ],
            [
                'label' => '2–4',
                'label_2' => 'Weeks an average penetration test lasts',
            ],
        ]);
    }
}
