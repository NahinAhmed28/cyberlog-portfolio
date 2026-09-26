<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVcisoCItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vciso_c_items', [
            [
                'item_0' => 'fa-chess-king',
                'item_1' => 'Security Strategy &amp; Roadmap',
                'item_2' => 'A prioritized, board-ready security roadmap aligned to your business goals.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Governance, Risk &amp; Compliance',
                'item_2' => 'Own GRC across ISO 27001, regulatory, and customer security requirements.',
            ],
            [
                'item_0' => 'fa-sitemap',
                'item_1' => 'Security Program Build-out',
                'item_2' => 'Stand up policies, controls, and an operating model that scales with you.',
            ],
            [
                'item_0' => 'fa-handshake',
                'item_1' => 'Board &amp; Stakeholder Reporting',
                'item_2' => 'Translate cyber risk into business language for executives and the board.',
            ],
            [
                'item_0' => 'fa-people-arrows',
                'item_1' => 'Vendor &amp; Third-Party Risk',
                'item_2' => 'Assess and manage supply-chain and third-party security risk.',
            ],
            [
                'item_0' => 'fa-bell',
                'item_1' => 'Incident Oversight',
                'item_2' => 'Lead incident readiness and act as the senior point of command during a crisis.',
            ],
        ]);
    }
}
