<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPortfolioIndexCardsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_portfolio_index_cards', [
            [
                'h4_text' => 'Dhaka Stock Exchange',
                'paragraph' => 'Cyberlog delivered SOC support for Bangladesh’s most critical capital market infrastructure.',
                'label' => '24/7 SOC Monitoring',
                'label_2' => '99.99% uptime for Capital Market Cyber Defense',
            ],
            [
                'h4_text' => 'Bangladesh Finance',
                'paragraph' => 'Cyberlog conducted VAPT to identify, validate, and prioritize exploitable security risks.',
                'label' => '360° Security Risk Review',
                'label_2' => '10+ High-Priority Risks Validated',
            ],
            [
                'h4_text' => 'BIDA',
                'paragraph' => 'Cybersecurity capacity building and assessment support to improve technical readiness.',
                'label' => '250%+ Increase in Cybersecurity Skills',
                'label_2' => '12 Security Areas Reviewed',
            ],
            [
                'h4_text' => 'Adcomm Limited',
                'paragraph' => 'ISO 27001 implementation and cybersecurity capacity building for compliance readiness.',
                'label' => '93 ISO Controls Mapped',
                'label_2' => '200+ Employees Trained',
            ],
        ]);
    }
}
