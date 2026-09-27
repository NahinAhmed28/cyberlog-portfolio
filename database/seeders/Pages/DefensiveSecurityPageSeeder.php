<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class DefensiveSecurityPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_defense_services', [
            [
                'title' => 'Offensive & Defensive Security Services - Cyberlog',
                'paragraph' => 'What We Test',
                'heading' => 'Offensive',
                'label' => 'Security Services',
                'icon' => 'fas fa-circle-plus',
                'label_2' => 'Related:',
                'label_3' => '·',
                'paragraph_2' => 'What We Defend',
                'heading_2' => 'Defensive',
                'label_4' => 'Security Services',
                'icon_2' => 'fas fa-circle-plus blue',
                'label_5' => 'Related:',
                'label_6' => '·',
                'title_2' => 'Under attack or want to be ready?',
                'text' => 'Our security team can help you test exposure, strengthen monitoring, and respond faster.',
            ],
        ]);
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
        $this->seedFeature('legacy_pages_defense_services_defensive', [
            [
                'title' => 'Threat Intelligence',
                'icon' => 'fa-satellite-dish',
                'points' => [
                    'Continuous monitoring of emerging threats',
                    'Detects leaked credentials and exposed assets',
                    'Early warning for proactive defense',
                ],
                'related' => [
                    'Threat Hunting',
                    'SIEM Solution',
                ],
            ],
            [
                'title' => 'Digital Forensics & Incident Response',
                'icon' => 'fa-fingerprint',
                'points' => [
                    'Investigates cyber incidents and evidence',
                    'Supports containment and root-cause analysis',
                    'Guides recovery and prevention actions',
                ],
                'related' => [
                    'Incident Response',
                    'Evidence Analysis',
                    'Containment Support',
                ],
            ],
        ]);
        $this->seedFeature('page_defensive_security_services', [
            [
                'title' => 'Defensive Security Services - Cyberlog',
                'eyebrow' => 'Defensive Security',
                'title_2' => 'Defensive Security Services',
                'summary' => 'Operational defense services that improve visibility, support incident readiness, and help organizations respond with better intelligence and evidence.',
                'hero_icon' => 'fa-shield-halved',
                'hero_image' => 'assets/img/services/defensive-security-services-hero.png',
                'hero_image_alt' => 'Defensive security operations center with blue shield, threat map, and incident response dashboards',
                'cta_title' => 'Need stronger cyber defense?',
                'cta_text' => 'Cyberlog can help improve threat visibility, investigation readiness, and recovery planning for critical environments.',
            ],
        ]);
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
