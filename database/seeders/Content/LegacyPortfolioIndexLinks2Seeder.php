<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPortfolioIndexLinks2Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_portfolio_index_links_2', [
            [
                'h4_text' => 'SOC',
                'paragraph' => '24/7 monitoring, threat detection, and incident response support.',
            ],
            [
                'h4_text' => 'VAPT',
                'paragraph' => 'Vulnerability assessment and penetration testing for digital systems.',
            ],
            [
                'h4_text' => 'IT Audit',
                'paragraph' => 'Security audit, compliance review, and ISO 27001 readiness support.',
            ],
            [
                'h4_text' => 'Capacity Building',
                'paragraph' => 'Cybersecurity training to improve employee awareness and readiness.',
            ],
            [
                'h4_text' => 'Defense Services',
                'paragraph' => 'Threat intelligence, incident response, firewall management, backup, and risk assessment.',
            ],
        ]);
    }
}
