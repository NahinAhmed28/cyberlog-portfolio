<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeStepItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_step_items', [
            [
                'no' => 'Step 01',
                'icon' => 'fa-magnifying-glass-chart',
                'title' => 'Understand Goals &amp; Requirements',
                'desc' => 'We map your assets, risk appetite, and compliance drivers to define a clear security scope.',
            ],
            [
                'no' => 'Step 02',
                'icon' => 'fa-diagram-project',
                'title' => 'Research &amp; Planning Strategy',
                'desc' => 'Threat modelling and architecture review to design the right defensive strategy.',
            ],
            [
                'no' => 'Step 03',
                'icon' => 'fa-rocket',
                'title' => 'Execution &amp; Implementation',
                'desc' => 'Testing, deployment, and integration of controls across your environment.',
            ],
            [
                'no' => 'Step 04',
                'icon' => 'fa-gauge-high',
                'title' => 'Monitoring &amp; Optimization',
                'desc' => '24/7 SOC monitoring with continuous tuning and improvement.',
            ],
            [
                'no' => 'Step 05',
                'icon' => 'fa-shield-halved',
                'title' => 'AI &amp; Automation',
                'desc' => 'Automated detection and response to reduce dwell time and alert noise.',
            ],
            [
                'no' => 'Step 06',
                'icon' => 'fa-file-shield',
                'title' => 'Reporting &amp; Support',
                'desc' => 'Actionable reporting, remediation guidance, and ongoing advisory support.',
            ],
        ]);
    }
}
