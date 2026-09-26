<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVaptBItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vapt_b_items', [
            [
                'item_0' => 'fa-user-secret',
                'item_1' => 'Real attacker mindset',
                'item_2' => 'Certified offensive security experts who think and act like real adversaries.',
            ],
            [
                'item_0' => 'fa-list-check',
                'item_1' => 'Prioritized, validated findings',
                'item_2' => 'No noise — every reported risk is manually validated and risk-rated.',
            ],
            [
                'item_0' => 'fa-screwdriver-wrench',
                'item_1' => 'Actionable remediation',
                'item_2' => 'Clear, developer-friendly guidance to fix issues fast.',
            ],
            [
                'item_0' => 'fa-rotate',
                'item_1' => 'Free re-testing',
                'item_2' => 'We verify your fixes actually close the risk.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Compliance-ready reports',
                'item_2' => 'Reports mapped to ISO 27001, PCI-DSS, and regulatory needs.',
            ],
            [
                'item_0' => 'fa-handshake',
                'item_1' => 'Trusted partner',
                'item_2' => 'A long-term relationship, not a one-off scan.',
            ],
        ]);
    }
}
