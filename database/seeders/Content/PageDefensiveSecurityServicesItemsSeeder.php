<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageDefensiveSecurityServicesItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_defensive_security_services_items', [
            [
                'route' => 'threat-intelligence',
                'image' => 'assets/img/services/defensive/threat-intelligence.png',
                'imageAlt' => 'Threat intelligence monitoring visual with global signals and alert indicators',
                'lead' => 'Turn external threat signals into early warning and action.',
                'points' => [
                    'Monitor emerging threats, attacker infrastructure, phishing campaigns, and exposed assets',
                    'Detect leaked credentials and cyber risk signals affecting your organization',
                    'Deliver actionable intelligence briefings for proactive security decisions',
                ],
            ],
            [
                'route' => 'security-consultancy',
                'image' => 'assets/img/services/defensive/cybersecurity-consultancy.png',
                'imageAlt' => 'Cybersecurity consultancy visual with a strategic security roadmap',
                'lead' => 'Turn security priorities into a practical, business-aligned roadmap.',
                'points' => [
                    'Assess current security maturity, business risk, and governance priorities',
                    'Develop practical policies, standards, and risk treatment plans',
                    'Guide leadership decisions with clear, prioritized security advice',
                ],
            ],
            [
                'route' => 'backup-recovery',
                'image' => 'assets/img/services/defensive/secure-backup-recovery-solutions.png',
                'imageAlt' => 'Secure backup and recovery visual with protected data storage',
                'lead' => 'Keep critical data recoverable through disruption and cyber incidents.',
                'points' => [
                    'Review backup coverage, retention, encryption, and access controls',
                    'Design resilient recovery workflows for critical systems and business data',
                    'Validate recovery readiness through documented procedures and testing',
                ],
            ],
            [
                'route' => 'secure-web-development',
                'image' => 'assets/img/services/defensive/secure-web-application-development.png',
                'imageAlt' => 'Secure web application development visual with protected application code',
                'lead' => 'Build security into applications from architecture through deployment.',
                'points' => [
                    'Apply secure-by-design architecture and Secure SDLC practices',
                    'Implement application hardening, validation, and access protections',
                    'Include resilience measures such as DDoS mitigation from the ground up',
                ],
            ],
        ]);
    }
}
