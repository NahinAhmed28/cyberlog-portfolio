<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPortfolioIndexLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_portfolio_index_links', [
            [
                'div_text' => 'Aspire to Innovate, a2i',
            ],
            [
                'div_text' => 'Aamar Taka',
            ],
            [
                'div_text' => 'Adcomm Limited',
            ],
            [
                'div_text' => 'Bangladesh Finance',
            ],
            [
                'div_text' => 'BIDA',
            ],
            [
                'div_text' => 'BPI',
            ],
            [
                'div_text' => 'Bangladesh Police',
            ],
            [
                'div_text' => 'BUBT',
            ],
            [
                'div_text' => 'Dhaka Stock Exchange',
            ],
            [
                'div_text' => 'LegalX',
            ],
            [
                'div_text' => 'NAPD',
            ],
            [
                'div_text' => 'Nazimgarh Resort',
            ],
            [
                'div_text' => 'ReachSavvy',
            ],
            [
                'div_text' => 'Vibe Gaming',
            ],
        ]);
    }
}
