<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptBenefitsBenefitsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_benefits_benefits', [
            [
                'item_0' => 'fa-bug',
                'item_1' => 'Real-World Risk Validation',
                'item_2' => 'We validate vulnerabilities manually to confirm real exploitability and business impact.',
            ],
            [
                'item_0' => 'fa-filter-circle-xmark',
                'item_1' => 'Reduced False Positives',
                'item_2' => 'Findings are verified and prioritized before they reach your technical team.',
            ],
            [
                'item_0' => 'fa-screwdriver-wrench',
                'item_1' => 'Clear Remediation Guidance',
                'item_2' => 'Reports include practical fix recommendations for developers, IT teams, and management.',
            ],
            [
                'item_0' => 'fa-rotate',
                'item_1' => 'Retesting After Fixes',
                'item_2' => 'We retest resolved findings to confirm that security gaps are properly closed.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Standards-Aligned Reporting',
                'item_2' => 'Findings are mapped with CVSS, OWASP Top 10, and recognized security practices.',
            ],
            [
                'item_0' => 'fa-chart-line',
                'item_1' => 'Improved Security Posture',
                'item_2' => 'Each assessment helps reduce risk across applications, networks, cloud, and infrastructure.',
            ],
        ]);
    }
}
