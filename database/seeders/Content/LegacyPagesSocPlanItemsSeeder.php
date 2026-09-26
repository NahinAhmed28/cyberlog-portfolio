<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocPlanItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_soc_plan_items', [
            [
                'item_0' => 'Essential',
                'item_1' => 'For growing teams getting started with managed detection.',
                'item_2' => [
                    '24/7 monitoring &amp; triage',
                    'SIEM management',
                    'Monthly reporting',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Advanced',
                'item_1' => 'For organizations that need MDR and threat intelligence.',
                'item_2' => [
                    'Everything in Essential',
                    'Managed Detection &amp; Response',
                    'Threat intelligence feeds',
                ],
                'item_3' => true,
            ],
            [
                'item_0' => 'Enterprise',
                'item_1' => 'For regulated, high-value environments needing full coverage.',
                'item_2' => [
                    'Everything in Advanced',
                    'Proactive threat hunting',
                    'Dedicated SOC analyst &amp; IR retainer',
                ],
                'item_3' => false,
            ],
        ]);
    }
}
