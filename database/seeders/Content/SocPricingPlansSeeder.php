<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocPricingPlansSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_pricing_plans', [
            [
                'item_0' => 'Essential',
                'item_1' => 'For organizations starting with structured SOC monitoring and basic security visibility.',
                'item_2' => [
                    'SIEM setup and configuration',
                    'Log collection from key systems',
                    'Alert monitoring and triage',
                    'Monthly security summary',
                    'Basic incident guidance',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Advanced',
                'item_1' => 'For organizations that need stronger detection, response support, and threat intelligence.',
                'item_2' => [
                    'Everything in Essential',
                    'Custom detection rules',
                    'Threat intelligence support',
                    'Incident investigation support',
                    'Regular tuning and reporting',
                    'Remediation guidance',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Enterprise',
                'item_1' => 'For high-risk, regulated, or large environments that need full SOC coverage and response readiness.',
                'item_2' => [
                    'Everything in Advanced',
                    'Dedicated SOC analyst support',
                    'Proactive threat hunting',
                    'Digital and network forensics support',
                    'Incident response retainer',
                    'Executive reporting',
                    'Compliance & audit support (ISO 27001, regulatory reporting)',
                ],
                'item_3' => false,
            ],
        ]);
    }
}
