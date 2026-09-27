<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class HomePageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_home', [
            [
                'title' => 'Cyberlog - Smarter Intelligence. Stronger Security.',
            ],
        ]);
        $this->seedFeature('home_assessment', [
            [
                'paragraph' => 'Assessment',
                'heading' => 'One standardised assessment,',
                'label' => 'complete compliance visibility',
                'paragraph_2' => 'Cyberlog evaluates each system against a standardised control set — so you can see exactly where you\'re compliant, where you\'re exposed, and which evidence is still missing, all in one place.',
                'icon' => 'fas fa-shield-halved',
                'div_text' => 'Domain B',
                'div_text_2' => 'Security Certifications',
                'label_2' => '3',
                'label_3' => 'Is your organisation ISO 27001 certified?',
                'icon_2' => 'fas fa-user',
                'label_4' => 'Response',
                'icon_3' => 'fas fa-circle-check',
                'label_5' => 'Compliant',
                'label_6' => 'Yes',
                'icon_4' => 'fas fa-paperclip',
                'label_7' => 'ISO27001-2026.pdf',
                'icon_5' => 'fas fa-user',
                'label_8' => 'Response',
                'icon_6' => 'fas fa-circle-xmark',
                'label_9' => 'Not compliant',
                'label_10' => 'No',
                'icon_7' => 'fas fa-link-slash',
                'label_11' => 'No evidence',
            ],
        ]);
        $this->seedFeature('home_cta_banner', [
            [
                'label' => 'Active threats demand',
                'label_2' => 'Active Cyber Defense',
                'paragraph' => 'Our team is ready to help',
                'destination' => '/contact',
            ],
        ]);
        $this->seedFeature('home_defend', [
            [
                'icon' => 'fas fa-user',
                'label' => 'Mark Smith',
                'paragraph' => 'What policies do you have regarding AI?',
                'icon_2' => 'fas fa-user',
                'label_2' => 'Laura Alman',
                'paragraph_2' => 'Have you found any risks on this supplier?',
                'icon_3' => 'fas fa-user',
                'label_3' => 'Amin Rahman',
                'paragraph_3' => 'Can anyone confirm this phishing indicator?',
                'icon_4' => 'fas fa-user',
                'label_4' => 'Sarah Khan',
                'paragraph_4' => 'Is this vendor exposed to the same CVE?',
                'icon_5' => 'fas fa-user',
                'label_5' => 'David Lee',
                'paragraph_5' => 'Sharing fresh IOC matches from our SOC.',
                'paragraph_6' => 'Collective Defense',
                'heading' => 'Share intelligence with your',
                'heading_2' => 'network and',
                'label_6' => 'Defend-as-One',
                'paragraph_7' => 'By working together, you collectively optimise resources, remove roadblocks to mitigation, and enhance security for every link in the chain.',
                'icon_6' => 'fas fa-share-nodes',
                'div_text' => 'Connected to',
                'heading_3' => 'Industry network',
                'icon_7' => 'fas fa-user',
                'label_7' => '13 Peers',
            ],
        ]);
        $this->seedFeature('home_hero', [
            [
                'heading' => 'Smarter Intelligence.',
                'label' => 'Stronger Security.',
                'paragraph' => 'Join our',
                'label_2' => 'Cyber Defense eco-system',
                'paragraph_2' => 'with',
                'label_3' => 'hundreds',
                'paragraph_3' => 'of other organizations!',
            ],
        ]);
        $this->seedFeature('home_network', [
            [
                'paragraph' => 'Attack Surface',
                'heading' => 'As your environment grows,',
                'label_4' => 'the risks reveal themselves',
                'paragraph_2' => 'See your full attack surface as it truly exists — every endpoint, server, application, and cloud asset mapped onto one living model. Identify where risk concentrates before attackers do.',
            ],
        ]);
        $this->seedFeature('home_our_story', [
            [
                'paragraph' => 'Our Story',
                'heading' => 'The Story of',
                'label' => 'Our Growth',
            ],
        ]);
        $this->seedFeature('home_our_story_milestones', [
            [
                'year' => '2022',
                'title' => 'The foundation of a cyber vision',
                'text' => 'Cyberlog began with a clear mission to support Bangladesh\'s growing digital ecosystem through practical, impact-driven cybersecurity.',
                'x' => 8,
                'y' => 86,
                'tone' => '#ffbf1b',
                'toneRgb' => '255, 191, 27',
            ],
            [
                'year' => '2023',
                'title' => 'Building industry presence',
                'text' => 'Cyberlog strengthened its market presence, expanded professional networks, and became recognized as a specialized cybersecurity company.',
                'x' => 29,
                'y' => 75,
                'tone' => '#6d9cff',
                'toneRgb' => '109, 156, 255',
            ],
            [
                'year' => '2024',
                'title' => 'Contributing to national cyber capacity',
                'text' => 'The company expanded its role through awareness, capacity building, advisory involvement, and contribution to cybersecurity maturity across institutions.',
                'x' => 50,
                'y' => 64,
                'tone' => '#42e6a4',
                'toneRgb' => '66, 230, 164',
            ],
            [
                'year' => '2025',
                'title' => 'Trusted across critical sectors',
                'text' => 'Cyberlog entered a stronger growth phase, earning trust across government, finance, education, enterprise, and critical sectors as a long-term cybersecurity partner.',
                'x' => 71,
                'y' => 55,
                'tone' => '#ffbf1b',
                'toneRgb' => '255, 191, 27',
            ],
            [
                'year' => '2026',
                'title' => 'Scaling cyber resilience',
                'text' => 'Cyberlog is moving toward a structured, product-led, and partnership-driven future to become a trusted cybersecurity brand for enterprises and critical digital infrastructure.',
                'x' => 92,
                'y' => 50,
                'tone' => '#42e6a4',
                'toneRgb' => '66, 230, 164',
            ],
        ]);
        $this->seedFeature('home_solutions', [
            [
                'group_routes' => [
                    'offensive' => 'offensive-security-services',
                    'defensive' => 'defensive-security-services',
                ],
                'paragraph' => 'Security Solutions',
                'heading' => 'Explore Our',
                'label' => 'Security Solutions',
                'label_2' => 'Learn More',
                'icon' => 'fas fa-arrow-right',
            ],
        ]);
        $this->seedFeature('home_tech_diagram', [
            [
                'paragraph' => 'HOW WE WORK',
                'label' => 'OUR ENGAGEMENT',
                'label_2' => 'PROCESS',
                'paragraph_2' => 'A structured, repeatable methodology that takes you from risk discovery to continuous protection.',
                'icon' => 'fas fa-shield-alt',
                'label_3' => 'Cyberlog',
                'label_4' => 'Security Ops',
            ],
        ]);
        $this->seedFeature('home_threats', [
            [
                'paragraph' => 'Threat Intelligence',
                'heading' => 'Stay ahead of emerging threats',
                'label_3' => 'with continuous risk signals',
                'paragraph_2' => 'Stay on top of the latest emerging threats, their blast radius, available patches, and the exact steps to take if one of your systems has been breached.',
                'icon_3' => 'fas fa-triangle-exclamation',
                'div_text' => 'Emerging threat',
                'heading_2' => 'React2Shell',
                'paragraph_3' => 'A critical vulnerability has been identified in the JavaScript library React.',
                'icon_4' => 'fas fa-magnifying-glass',
                'label_4' => '12 investigating',
                'icon_5' => 'fas fa-screwdriver-wrench',
                'label_5' => '4 remediating',
                'icon_6' => 'fas fa-circle-check',
                'label_6' => '5 resolved',
                'icon_7' => 'fas fa-shield-halved',
                'label_7' => '6 unaffected',
            ],
        ]);
        $this->seedFeature('legacy_pages_home', [
            [
                'title' => 'Cyberlog - Smarter Intelligence. Stronger Security.',
                'paragraph' => 'THREAT INTELLIGENCE · MANAGED SOC · OFFENSIVE SECURITY',
                'heading' => 'Smarter Intelligence.',
                'label' => 'Stronger Security.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
                'link_url_2' => '/services',
                'link_label_2' => 'Explore Services',
                'icon_5' => 'fas fa-arrow-right ms-1',
                'paragraph_2' => 'Join our cyber defense eco-system with',
                'label_6' => 'hundreds',
                'paragraph_3' => 'of organizations',
                'div_text' => 'CYBERLOG // LIVE THREAT FEED',
                'label_7' => '00:00:01',
                'label_8' => '[CLEAN]',
                'label_9' => 'endpoint scan · 1,204 assets',
                'label_10' => '00:00:00',
                'label_11' => '[BLOCKED]',
                'label_12' => 'brute-force attempt · 203.0.113.*',
                'div_data_count_3' => 99.9,
                'div_data_suffix_3' => '%',
                'div_text_6' => '99.9%',
                'div_text_7' => 'Uptime SLA',
                'paragraph_4' => 'How we work',
                'heading_2' => 'Our Engagement Process',
                'paragraph_5' => 'A structured, repeatable methodology that takes you from risk discovery to continuous protection.',
                'paragraph_6' => 'What we do',
                'heading_3' => 'Explore Our Security Solutions',
                'icon_6' => 'fas fa-shield-halved',
                'label_13' => 'Learn More',
                'icon_7' => 'fas fa-arrow-right ms-1',
                'paragraph_7' => 'Proven impact',
                'heading_4' => 'Client Success Stories',
                'icon_8' => 'fas fa-chart-line',
                'paragraph_8' => 'Our Story',
                'heading_5' => 'A decade of building cyber resilience',
                'paragraph_9' => 'Cyberlog helps organizations strengthen their cyber resilience through offensive security, managed security operations, compliance readiness, and expert advisory services. We work alongside enterprises, government bodies, and financial institutions to defend what matters most.',
                'paragraph_10' => 'From a focused security team to a full-spectrum cyber defense partner, our growth has been driven by measurable outcomes and long-term client trust.',
                'link_url_3' => '/about',
                'link_label_3' => 'Read Our Story',
                'title_2' => 'Ready to build your cyber defense eco-system?',
                'text' => 'Join hundreds of organizations that trust Cyberlog.',
            ],
        ]);
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
        $this->seedFeature('legacy_pages_home_case_items', [
            [
                'tag' => 'Capital Market',
                'name' => 'Dhaka Stock Exchange',
                'desc' => 'Cyberlog delivered SOC support for Bangladesh\'s most critical capital market infrastructure and one of the country\'s highest-value financial technology environments.',
                'stats' => [
                    [
                        '24/7',
                        'SOC Monitoring',
                    ],
                    [
                        '99.99%',
                        'Uptime for Capital Market Cyber Defense',
                    ],
                ],
            ],
            [
                'tag' => 'Financial Institute',
                'name' => 'Bangladesh Finance',
                'desc' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
                'stats' => [
                    [
                        '360°',
                        'Security Risk Review',
                    ],
                    [
                        '10+',
                        'High-Priority Risks Validated',
                    ],
                ],
            ],
            [
                'tag' => 'Government Organization',
                'name' => 'Bangladesh Investment Development Authority (BIDA)',
                'desc' => 'Cyberlog conducted cybersecurity capacity building for the IT team and supported a cybersecurity assessment to improve technical readiness and institutional resilience.',
                'stats' => [
                    [
                        '250%+',
                        'Increase in Employees\' Cybersecurity Skills',
                    ],
                    [
                        '12',
                        'Security Areas Reviewed',
                    ],
                ],
            ],
            [
                'tag' => 'Advertisement Industry',
                'name' => 'Adcomm Limited',
                'desc' => 'Cyberlog supported Adcomm Limited with ISO 27001 implementation and employee cybersecurity capacity building to strengthen compliance readiness and workforce security awareness.',
                'stats' => [
                    [
                        '93',
                        'ISO Controls Mapped',
                    ],
                    [
                        '200+',
                        'Employees Trained',
                    ],
                ],
            ],
        ]);
        $this->seedFeature('legacy_pages_home_m_items', [
            [
                'item_0' => '500+',
                'item_1' => 'Users Protected Across Managed Services',
            ],
            [
                'item_0' => '14+',
                'item_1' => 'Enterprise &amp; Government Clients',
            ],
            [
                'item_0' => '24/7',
                'item_1' => 'Security Operations Coverage',
            ],
            [
                'item_0' => '93',
                'item_1' => 'ISO 27001 Controls Implemented',
            ],
        ]);
        $this->seedFeature('home_cta_banner_cta2_line', [
            [
                'icon' => 'fas fa-calendar-check',
                'link_label' => 'Book a Demo',
            ],
            [
                'icon' => 'fas fa-headset',
                'link_label' => 'Talk to an Expert',
            ],
        ]);
        $this->seedFeature('home_defend_dao_stats', [
            [
                'div_data_count' => 45,
                'div_text' => '45',
                'div_text_2' => '3rd-party',
            ],
            [
                'div_data_count' => 56,
                'div_text' => '56',
                'div_text_2' => '4th-party',
            ],
            [
                'div_data_count' => 90,
                'div_text' => '90',
                'div_text_2' => '5th-party',
            ],
            [
                'div_data_count' => 102,
                'div_text' => '102',
                'div_text_2' => '6th-party',
            ],
        ]);
        $this->seedFeature('home_hero_drift', [
            [
                'icon' => 'fas fa-bug',
                'label' => 'Penetration Testing',
            ],
            [
                'icon' => 'fas fa-desktop',
                'label' => 'Security Operations Center (SOC)',
            ],
            [
                'icon' => 'fas fa-clipboard-check',
                'label' => 'Security Audit & Training',
            ],
            [
                'icon' => 'fas fa-robot',
                'label' => 'AI Automation',
            ],
        ]);
        $this->seedFeature('home_network_clnetcard', [
            [
                'icon' => 'fas fa-shield-halved',
                'label' => '6',
                'label_2' => 'potential concentration risks found',
            ],
            [
                'icon' => 'fas fa-chart-pie',
                'label' => '9',
                'label_2' => 'assets have under 80% compliance',
            ],
        ]);
        $this->seedFeature('home_network_net_stats', [
            [
                'div_data_count' => 45,
                'div_text' => '45',
                'div_text_2' => 'Endpoints',
            ],
            [
                'div_data_count' => 56,
                'div_text' => '56',
                'div_text_2' => 'Servers',
            ],
            [
                'div_data_count' => 90,
                'div_text' => '90',
                'div_text_2' => 'Applications',
            ],
            [
                'div_data_count' => 102,
                'div_text' => '102',
                'div_text_2' => 'Cloud Assets',
            ],
        ]);
        $this->seedFeature('home_network_net_floats', [
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
            [
                'icon' => 'fas fa-circle-xmark',
                'label' => 'Critical risk found',
            ],
        ]);
        $this->seedFeature('home_our_story_story_stats', [
            [
                'label' => '21+',
                'label_2' => 'Enterprise And Government Clients',
            ],
            [
                'label' => '24/7',
                'label_2' => 'Security Operations Coverage',
            ],
            [
                'label' => '5000+',
                'label_2' => 'Users Protected Across Services',
            ],
        ]);
        $this->seedFeature('home_tech_diagram_process_stage_grid', [
            [
                'div_text' => 'Step 01',
                'heading' => 'Understanding Business & Risks',
                'icon' => 'fas fa-bullseye',
                'paragraph' => 'Scope & Goals',
            ],
            [
                'div_text' => 'Step 02',
                'heading' => 'Security Assessment & Discovery',
                'icon' => 'fas fa-crosshairs',
                'paragraph' => 'Assets & Exposure',
            ],
            [
                'div_text' => 'Step 03',
                'heading' => 'Vulnerability Testing',
                'icon' => 'fas fa-bug',
                'paragraph' => 'VAPT / App Security',
            ],
            [
                'div_text' => 'Step 04',
                'heading' => 'Protection & Implementation',
                'icon' => 'fas fa-shield-halved',
                'paragraph' => 'SOC / Hardening',
            ],
            [
                'div_text' => 'Step 05',
                'heading' => 'Monitoring & Threat Detection',
                'icon' => 'fas fa-satellite-dish',
                'paragraph' => 'Detect & Respond',
            ],
            [
                'div_text' => 'Step 06',
                'heading' => 'Reporting & Continuous Improvement',
                'icon' => 'fas fa-arrow-trend-up',
                'paragraph' => 'Remediation & Compliance',
            ],
        ]);
        $this->seedFeature('home_threats_th_floats', [
            [
                'icon' => 'fas fa-screwdriver-wrench',
                'label' => 'Client is remediating',
            ],
            [
                'icon' => 'fas fa-magnifying-glass',
                'label' => 'Client is investigating',
            ],
        ]);
        $this->seedFeature('legacy_pages_home_console_stats', [
            [
                'div_data_count' => 500,
                'div_data_suffix' => '+',
                'div_text' => '500+',
                'div_text_2' => 'Users protected',
            ],
            [
                'div_data_count' => 24,
                'div_data_suffix' => '/7',
                'div_text' => '24/7',
                'div_text_2' => 'Monitoring',
            ],
        ]);
        $this->seedFeature('legacy_pages_home_links', [
            [
                'icon' => 'fas fa-bug',
                'label' => 'Penetration Testing',
            ],
            [
                'icon' => 'fas fa-desktop',
                'label' => 'SOC',
            ],
            [
                'icon' => 'fas fa-clipboard-check',
                'label' => 'Security Audit & Training',
            ],
            [
                'icon' => 'fas fa-user-shield',
                'label' => 'vCISO',
            ],
        ]);
    }
}
