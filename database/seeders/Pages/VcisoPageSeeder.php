<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class VcisoPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vciso_hero', [
            [
                'heading' => 'Bangladesh\'s First Unified Cybersecurity Solution:',
                'label' => 'Prohoree 365',
                'source_media' => 'assets/video/Vciso_Dashboard.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'div_aria_label' => 'vCISO service coverage diagram',
                'div_aria_label_2' => 'Prohoree 365 core',
                'label_2' => 'Prohoree',
                'label_3' => '365',
            ],
        ]);
        $this->seedFeature('vciso_hero_left_nodes', [
            [
                'icon' => 'fa-desktop',
                'label' => 'Security Operations Center (SOC)',
                'x' => 16,
                'y' => 18,
            ],
            [
                'icon' => 'fa-bolt',
                'label' => 'Incident Response',
                'x' => 9,
                'y' => 41,
            ],
            [
                'icon' => 'fa-shield-virus',
                'label' => 'Firewall Management',
                'x' => 14,
                'y' => 66,
            ],
            [
                'icon' => 'fa-database',
                'label' => 'Data Protection & Backup',
                'x' => 27,
                'y' => 84,
            ],
        ]);
        $this->seedFeature('vciso_hero_right_nodes', [
            [
                'icon' => 'fa-bug',
                'label' => 'VAPT (Vulnerability Assessment & Penetration Testing)',
                'x' => 84,
                'y' => 18,
            ],
            [
                'icon' => 'fa-satellite-dish',
                'label' => 'Threat Intelligence',
                'x' => 91,
                'y' => 41,
            ],
            [
                'icon' => 'fa-triangle-exclamation',
                'label' => 'Risk Assessment',
                'x' => 86,
                'y' => 66,
            ],
            [
                'icon' => 'fa-graduation-cap',
                'label' => 'Capacity Building (Training)',
                'x' => 73,
                'y' => 84,
            ],
        ]);
        $this->seedFeature('vciso_product', [
            [
                'paragraph' => 'Prohoree 365',
                'heading' => 'Prohoree 365 Components',
                'icon' => 'fas fa-plus cl-vm-plus',
                'icon_2' => 'fas fa-circle-check',
            ],
        ]);
        $this->seedFeature('vciso_product_modules', [
            [
                'name' => 'VAPT',
                'icon' => 'fa-bug',
                'team' => 'red',
                'screenshot' => 'assets/img/portfolio_website_SS/VAPT.png',
                'headline' => 'Get <span class="cl-vm-hl">Continuous and Validated</span> Vulnerability Insight for Your Business',
                'body' => 'vCISO\'s VAPT module continuously scans your assets and validates exploitable weaknesses, combining automated discovery with manual testing for accurate, real-world findings.',
                'points' => [
                    'Continuous vulnerability scanning',
                    'Manual exploitation validation',
                    'OWASP & CVSS-based risk scoring',
                ],
                'console' => [
                    [
                        'SCAN',
                        'continuous asset discovery',
                        'RUNNING',
                        'blue',
                    ],
                    [
                        'VALIDATE',
                        'manual exploit check',
                        'CONFIRMED',
                        'warm',
                    ],
                    [
                        'RISK',
                        'OWASP · CVSS scoring',
                        '9.1 CRITICAL',
                        'red',
                    ],
                ],
            ],
            [
                'name' => 'SOC',
                'icon' => 'fa-desktop',
                'team' => 'blue',
                'screenshot' => 'assets/img/portfolio_website_SS/SOC.png',
                'headline' => 'Stay Protected with <span class="cl-vm-hl">Real-Time</span> Threat Monitoring',
                'body' => 'Our SOC module delivers centralized visibility into your environment, correlating logs and alerts so threats are caught the moment they emerge.',
                'points' => [
                    'Centralized log correlation',
                    'Real-time alerting',
                    'Proactive threat hunting',
                ],
                'console' => [
                    [
                        'LOGS',
                        'centralized correlation',
                        '24/7',
                        'blue',
                    ],
                    [
                        'ALERTS',
                        'real-time triage',
                        'LIVE',
                        'red',
                    ],
                    [
                        'HUNT',
                        'proactive threat sweep',
                        'ACTIVE',
                        'warm',
                    ],
                ],
            ],
            [
                'name' => 'Incident Response',
                'icon' => 'fa-bolt',
                'team' => 'blue',
                'screenshot' => 'assets/img/portfolio_website_SS/incident_response.png',
                'headline' => 'Respond <span class="cl-vm-hl">Faster</span> When It Matters Most',
                'body' => 'When an incident hits, vCISO guides your team through rapid containment and investigation, minimizing impact and downtime.',
                'points' => [
                    'Rapid threat containment',
                    'Guided investigation workflows',
                    'Post-incident reporting',
                ],
                'console' => [
                    [
                        'CONTAIN',
                        'isolate affected systems',
                        'RAPID',
                        'red',
                    ],
                    [
                        'INVESTIGATE',
                        'guided workflow',
                        'STEP 3/6',
                        'warm',
                    ],
                    [
                        'REPORT',
                        'post-incident summary',
                        'READY',
                        'blue',
                    ],
                ],
            ],
            [
                'name' => 'Firewall Management',
                'icon' => 'fa-shield-virus',
                'team' => 'blue',
                'screenshot' => null,
                'headline' => '<span class="cl-vm-hl">Centralized Control</span> Over Your Network Defenses',
                'body' => 'Manage and monitor your firewall policies from a single dashboard, with real-time visibility into rule changes and unauthorized access attempts.',
                'points' => [
                    'Real-time rule monitoring',
                    'Policy configuration & updates',
                    'Unauthorized access alerts',
                ],
                'console' => [
                    [
                        'RULES',
                        'real-time monitoring',
                        'SYNCED',
                        'blue',
                    ],
                    [
                        'POLICY',
                        'configuration & updates',
                        'v2.4',
                        'warm',
                    ],
                    [
                        'ACCESS',
                        'unauthorized attempt',
                        'BLOCKED',
                        'red',
                    ],
                ],
            ],
            [
                'name' => 'Risk Assessment',
                'icon' => 'fa-triangle-exclamation',
                'team' => 'red',
                'screenshot' => 'assets/img/portfolio_website_SS/Risk_assesment.png',
                'headline' => 'Know Your Risk <span class="cl-vm-hl">Before It Becomes a Breach</span>',
                'body' => 'vCISO continuously evaluates your organization\'s risk exposure, scoring assets by impact so your team always knows where to focus first.',
                'points' => [
                    'Asset-based risk scoring',
                    'Business impact analysis',
                    'Prioritized remediation roadmap',
                ],
                'console' => [
                    [
                        'ASSETS',
                        'impact-based scoring',
                        'SCORED',
                        'blue',
                    ],
                    [
                        'IMPACT',
                        'business analysis',
                        '3 HIGH',
                        'red',
                    ],
                    [
                        'ROADMAP',
                        'prioritized remediation',
                        'QUEUED',
                        'warm',
                    ],
                ],
            ],
            [
                'name' => 'Backup',
                'icon' => 'fa-database',
                'team' => 'blue',
                'screenshot' => 'assets/img/portfolio_website_SS/Backup.png',
                'headline' => 'Keep Your Business Running, <span class="cl-vm-hl">No Matter What</span>',
                'body' => 'Automated backups and fast recovery options ensure your critical data and operations are protected against disruption.',
                'points' => [
                    'Automated backup scheduling',
                    'Secure off-site storage',
                    'Fast disaster recovery',
                ],
                'console' => [
                    [
                        'SCHEDULE',
                        'automated backups',
                        'NIGHTLY',
                        'blue',
                    ],
                    [
                        'STORAGE',
                        'secure off-site',
                        'ENCRYPTED',
                        'warm',
                    ],
                    [
                        'RECOVERY',
                        'disaster restore',
                        'TESTED',
                        'blue',
                    ],
                ],
            ],
            [
                'name' => 'Data Encryption',
                'icon' => 'fa-lock',
                'team' => 'blue',
                'screenshot' => 'assets/img/portfolio_website_SS/Data_encryption.png',
                'headline' => 'Protect Sensitive Data at <span class="cl-vm-hl">Every Layer</span>',
                'body' => 'Track encryption status across your critical assets in real time, ensuring sensitive data stays protected at rest and in transit.',
                'points' => [
                    'End-to-end encryption status',
                    'Key management visibility',
                    'Compliance-ready reporting',
                ],
                'console' => [
                    [
                        'STATUS',
                        'end-to-end coverage',
                        'ENCRYPTED',
                        'blue',
                    ],
                    [
                        'KEYS',
                        'management visibility',
                        'ROTATED',
                        'warm',
                    ],
                    [
                        'COMPLIANCE',
                        'audit reporting',
                        'READY',
                        'blue',
                    ],
                ],
            ],
            [
                'name' => 'Capacity Building (Training)',
                'icon' => 'fa-graduation-cap',
                'team' => 'red',
                'screenshot' => 'assets/img/portfolio_website_SS/Security&Training.png',
                'headline' => 'Build a <span class="cl-vm-hl">Security-Aware</span> Workforce',
                'body' => 'Track your team\'s training progress and phishing readiness directly from the dashboard, turning awareness into a measurable metric.',
                'points' => [
                    'Role-based training modules',
                    'Phishing simulation campaigns',
                    'Awareness progress tracking',
                ],
                'console' => [
                    [
                        'TRAINING',
                        'role-based modules',
                        '78%',
                        'blue',
                    ],
                    [
                        'PHISHING SIM',
                        'campaign launched',
                        'SENT',
                        'red',
                    ],
                    [
                        'AWARENESS',
                        'progress tracking',
                        'RISING',
                        'warm',
                    ],
                ],
            ],
            [
                'name' => 'Threat Intelligence',
                'icon' => 'fa-satellite-dish',
                'team' => 'red',
                'screenshot' => 'assets/img/portfolio_website_SS/Threat_inteligence.png',
                'headline' => 'Stay Ahead with <span class="cl-vm-hl">Real-Time</span> Threat Visibility',
                'body' => 'vCISO continuously monitors emerging threats and exposed assets across your digital footprint, giving your team early warning before risks become incidents.',
                'points' => [
                    'Leaked credential monitoring',
                    'Phishing campaign detection',
                    'Industry-specific threat insights',
                ],
                'console' => [
                    [
                        'CREDENTIALS',
                        'leak monitoring',
                        '0 NEW',
                        'blue',
                    ],
                    [
                        'PHISHING',
                        'campaign detection',
                        'FLAGGED',
                        'red',
                    ],
                    [
                        'INSIGHTS',
                        'industry-specific feed',
                        'WEEKLY',
                        'warm',
                    ],
                ],
            ],
        ]);
        $this->seedFeature('page_vciso', [
            [
                'title' => 'Prohoree 365 - Unified Cybersecurity Solution - Cyberlog',
                'meta_description' => 'Prohoree 365 is Cyberlog\'s unified cybersecurity solution, bringing security leadership, risk governance, compliance, SOC alignment, and security operations into one platform.',
                'title_2' => 'Need a CISO without the full-time cost?',
                'text' => 'Cyberlog gives you executive security leadership, practical governance, and measurable progress from day one.',
            ],
        ]);
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
        $this->seedFeature('legacy_pages_vciso_cap_items', [
            [
                'item_0' => 'fa-brain',
                'item_1' => 'Cyber Threat Intelligence',
            ],
            [
                'item_0' => 'fa-bug',
                'item_1' => 'Penetration Testing',
            ],
            [
                'item_0' => 'fa-shield-virus',
                'item_1' => 'Digital Risk Protection',
            ],
            [
                'item_0' => 'fa-magnifying-glass',
                'item_1' => 'Vulnerability Intelligence',
            ],
        ]);
        $this->seedFeature('legacy_pages_vciso_cap_items_2', [
            [
                'item_0' => 'fa-user-secret',
                'item_1' => 'Dark Web Monitoring',
            ],
            [
                'item_0' => 'fa-diagram-project',
                'item_1' => 'Attack Surface Monitoring',
            ],
            [
                'item_0' => 'fa-fingerprint',
                'item_1' => 'Cyber Criminal Profiling',
            ],
            [
                'item_0' => 'fa-burst',
                'item_1' => 'Breach &amp; Attack Simulation',
            ],
        ]);
        $this->seedFeature('legacy_pages_vciso_c_items', [
            [
                'item_0' => 'fa-chess-king',
                'item_1' => 'Security Strategy &amp; Roadmap',
                'item_2' => 'A prioritized, board-ready security roadmap aligned to your business goals.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Governance, Risk &amp; Compliance',
                'item_2' => 'Own GRC across ISO 27001, regulatory, and customer security requirements.',
            ],
            [
                'item_0' => 'fa-sitemap',
                'item_1' => 'Security Program Build-out',
                'item_2' => 'Stand up policies, controls, and an operating model that scales with you.',
            ],
            [
                'item_0' => 'fa-handshake',
                'item_1' => 'Board &amp; Stakeholder Reporting',
                'item_2' => 'Translate cyber risk into business language for executives and the board.',
            ],
            [
                'item_0' => 'fa-people-arrows',
                'item_1' => 'Vendor &amp; Third-Party Risk',
                'item_2' => 'Assess and manage supply-chain and third-party security risk.',
            ],
            [
                'item_0' => 'fa-bell',
                'item_1' => 'Incident Oversight',
                'item_2' => 'Lead incident readiness and act as the senior point of command during a crisis.',
            ],
        ]);
    }
}
