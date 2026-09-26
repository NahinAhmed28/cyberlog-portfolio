<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeSolItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_home_sol_items', [
            [
                'route' => 'soc',
                'icon' => 'fa-desktop',
                'title' => 'SOC as a Service',
                'desc' => '24/7 monitoring, threat detection, and incident response from a mature security operations center.',
            ],
            [
                'route' => 'vapt',
                'icon' => 'fa-bug',
                'title' => 'VAPT / Pen Testing',
                'desc' => 'Vulnerability assessment and black/grey/white-box penetration testing across your digital systems.',
            ],
            [
                'route' => 'it-audit',
                'icon' => 'fa-clipboard-check',
                'title' => 'IT Audit &amp; ISO 27001',
                'desc' => 'Security audit, GRC, compliance review, and ISO 27001 implementation &amp; certification readiness.',
            ],
            [
                'route' => 'capacity-building',
                'icon' => 'fa-graduation-cap',
                'title' => 'Capacity Building',
                'desc' => 'Cybersecurity awareness training to turn your people into your strongest human firewall.',
            ],
            [
                'route' => 'defense-services',
                'icon' => 'fa-tower-broadcast',
                'title' => 'Defense Services',
                'desc' => 'Threat intel, incident response, firewall management, risk assessment, and backup.',
            ],
            [
                'route' => 'vciso',
                'icon' => 'fa-user-shield',
                'title' => 'vCISO',
                'desc' => 'Virtual CISO support for governance, strategy, compliance, and long-term cyber resilience.',
            ],
        ]);
    }
}
