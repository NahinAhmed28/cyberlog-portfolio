<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocBItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_b_items', [
            [
                'item_0' => 'fa-gauge-high',
                'item_1' => 'Faster than an in-house SOC team',
                'item_2' => 'Our SOC is a live, battle-tested response engine that detects, contains, and remediates faster.',
            ],
            [
                'item_0' => 'fa-chart-line',
                'item_1' => 'Operational clarity &amp; measurable outcomes',
                'item_2' => 'Get full visibility with detailed reporting and real measurable outcomes for every incident.',
            ],
            [
                'item_0' => 'fa-volume-off',
                'item_1' => 'Tool optimization &amp; alert noise reduction',
                'item_2' => 'We tune your stack to cut false positives and alert fatigue so analysts focus on real threats.',
            ],
            [
                'item_0' => 'fa-crosshairs',
                'item_1' => 'Proactive threat hunting, not just monitoring',
                'item_2' => 'We hunt for hidden threats across networks, endpoints, and the cloud — not just passive alerts.',
            ],
            [
                'item_0' => 'fa-bolt',
                'item_1' => 'Instant kickoff with a mature SOCaaS team',
                'item_2' => 'Skip the hiring delays. Onboard in days with a mature, ready-to-run SOC capability.',
            ],
            [
                'item_0' => 'fa-robot',
                'item_1' => 'Human-led security with smart tech',
                'item_2' => 'Our SOC pairs expert human analysts with AI-driven automation to reduce dwell time.',
            ],
        ]);
    }
}
