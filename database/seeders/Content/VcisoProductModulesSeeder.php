<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VcisoProductModulesSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
