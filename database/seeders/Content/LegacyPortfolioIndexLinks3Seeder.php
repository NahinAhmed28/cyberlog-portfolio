<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPortfolioIndexLinks3Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_portfolio_index_links_3', [
            [
                'label' => 'Penetration Testing',
            ],
            [
                'label' => 'Security Operations Center (SOC)',
            ],
            [
                'label' => 'Security Audit & Training',
            ],
            [
                'label' => 'vCISO',
            ],
        ]);
    }
}
