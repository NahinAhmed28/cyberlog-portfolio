<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocCardsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_cards', [
            [
                'label_text' => 'Number of employees',
                'option_text' => '1 - 100',
                'option_text_2' => '100 - 500',
                'option_text_3' => '500 - 1000',
                'option_text_4' => '1000+',
            ],
            [
                'label_text' => 'Assets to protect',
                'option_text' => '50 - 200',
                'option_text_2' => '200 - 500',
                'option_text_3' => '500 - 1000',
                'option_text_4' => '1000+',
            ],
        ]);
    }
}
