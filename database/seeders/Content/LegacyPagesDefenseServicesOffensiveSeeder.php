<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesDefenseServicesOffensiveSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_defense_services_offensive', [
            [
                'title' => 'Red Team Assessment',
                'icon' => 'fa-user-secret',
                'points' => [
                    'Authorized, controlled attack simulations',
                    'Tests people, processes, and technology',
                    'Validates real-world defense readiness',
                ],
                'related' => [
                    'Ethical Hacking',
                    'Social Engineering',
                    'Vulnerability Exploitation',
                ],
            ],
            [
                'title' => 'Web, API & Mobile Application Security Testing',
                'icon' => 'fa-mobile-screen-button',
                'points' => [
                    'Full-stack testing across web, API, and mobile',
                    'Mapped to the OWASP Top 10',
                    'Manual and automated assessment',
                ],
                'related' => [
                    'Web App Scanning',
                    'API Testing',
                    'Mobile Application Testing',
                ],
            ],
            [
                'title' => 'Network Security Assessment',
                'icon' => 'fa-network-wired',
                'points' => [
                    'Internal and external network testing',
                    'Identifies misconfigurations and exposed services',
                    'Hands-on exploitation, not just scanning',
                ],
                'related' => [
                    'Server-Side Testing',
                    'Penetration Testing',
                ],
            ],
        ]);
    }
}
