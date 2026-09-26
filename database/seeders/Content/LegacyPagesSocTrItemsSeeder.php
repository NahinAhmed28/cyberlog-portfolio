<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocTrItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_tr_items', [
            [
                'td_text' => 'In-House SOC',
                'td_text_2' => '$750,000',
                'td_text_3' => '6 months',
                'td_text_4' => '4.0',
                'td_text_5' => '70%',
                'td_text_6' => '70%',
            ],
            [
                'td_text' => 'Hybrid SOC (Co-Managed)',
                'td_text_2' => '$400,000',
                'td_text_3' => '1 month',
                'td_text_4' => '2.5',
                'td_text_5' => '90%',
                'td_text_6' => '90%',
            ],
            [
                'td_text' => 'Fully Outsourced SOC',
                'td_text_2' => '$280,000',
                'td_text_3' => '2 weeks',
                'td_text_4' => '1.5',
                'td_text_5' => '92%',
                'td_text_6' => '92%',
            ],
        ]);
    }
}
