<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocNumbersCardsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_numbers_cards', [
            [
                'div_text' => '01',
                'div_text_2' => '#1',
                'div_text_3' => 'SOC provider in Bangladesh for government & enterprise-grade threat response',
            ],
            [
                'div_text' => '02',
                'div_text_2' => '510%',
                'div_text_3' => 'Return on investment over 3 years vs. building an in-house SOC',
            ],
            [
                'div_text' => '03',
                'div_text_2' => '3 min',
                'div_text_3' => 'Average mean time to respond (MTTR) from alert to analyst action',
            ],
            [
                'div_text' => '04',
                'div_text_2' => '97%',
                'div_text_3' => 'Accurate detection rate — filtering noise so your team only sees real threats',
            ],
        ]);
    }
}
