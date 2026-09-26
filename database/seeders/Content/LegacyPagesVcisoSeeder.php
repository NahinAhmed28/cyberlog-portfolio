<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVcisoSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vciso', [
            [
                'title' => 'vCISO — Virtual CISO Services — Cyberlog',
                'paragraph' => 'Virtual CISO',
                'heading' => 'Executive Security Leadership,',
                'label' => 'On Demand',
                'paragraph_2' => 'Cyberlog\'s vCISO gives you board-level security strategy, governance, and compliance leadership — without the cost of a full-time hire. We own your security roadmap and drive long-term cyber resilience.',
                'link_url' => '/contact',
                'link_label' => 'Talk to a vCISO',
                'a_href' => '#capabilities',
                'link_label_2' => 'See Capabilities',
                'icon' => 'fas fa-user-shield text-teal',
                'div_text' => 'vCISO Core',
                'paragraph_3' => 'What Your vCISO Owns',
                'heading_2' => 'Governance, Strategy & Resilience',
                'title_2' => 'Need a CISO without the full-time cost?',
                'text' => 'Get executive security leadership from day one.',
            ],
        ]);
    }
}
