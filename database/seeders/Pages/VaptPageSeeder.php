<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class VaptPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_benefits', [
            [
                'paragraph' => 'Why Cyberlog VAPT',
                'heading' => 'Benefits',
            ],
        ]);
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
        $this->seedFeature('vapt_boxes', [
            [
                'paragraph' => 'Testing Approaches',
                'heading' => 'Black Box, Grey Box & White Box Testing',
                'paragraph_2' => 'Choose the testing approach based on available access, project goal, and required assessment depth.',
                'label' => 'Conditions:',
                'label_2' => 'Value:',
            ],
        ]);
        $this->seedFeature('vapt_boxes_boxes', [
            [
                'class' => 'black',
                'title' => 'Black Box',
                'conditions' => 'Testing with minimal or no internal information.',
                'value' => 'Best for validating external exposure and real attacker behavior.',
            ],
            [
                'class' => 'grey',
                'title' => 'Grey Box',
                'conditions' => 'Testing with limited access, selected credentials, or partial system context.',
                'value' => 'Best for balanced security validation with better speed and accuracy.',
            ],
            [
                'class' => 'white',
                'title' => 'White Box',
                'conditions' => 'Testing with full access to architecture, credentials, source details, or internal documentation.',
                'value' => 'Best for deep security review, logic flaws, and code-level risk validation.',
            ],
        ]);
        $this->seedFeature('vapt_calculator', [
            [
                'paragraph' => 'Service Calculator',
                'heading' => 'Estimate Your',
                'label' => 'VAPT Scope',
                'paragraph_2' => 'VAPT effort depends on asset count, application complexity, user roles, testing depth, and environment type. Share your scope details to get an initial estimate from Cyberlog.',
                'label_2' => 'Web Applications',
                'label_3' => '0',
                'input_min' => 0,
                'input_max' => 20,
                'label_4' => 'APIs',
                'label_5' => '0',
                'input_min_2' => 0,
                'input_max_2' => 20,
                'label_6' => 'Mobile Applications',
                'label_7' => '0',
                'input_min_3' => 0,
                'input_max_3' => 20,
                'label_8' => 'Network Assets / IPs',
                'label_9' => '0',
                'input_min_4' => 0,
                'input_max_4' => 250,
                'label_10' => 'Testing approach',
                'button_data_mult' => 1,
                'button_label' => 'Black',
                'button_data_mult_2' => 1.25,
                'button_label_2' => 'Grey',
                'button_data_mult_3' => 1.55,
                'button_label_3' => 'White',
                'div_text' => 'BDT',
                'label_11' => '0',
                'div_text_2' => 'estimated cost',
                'label_12' => '0',
                'div_text_3' => 'analyst days',
                'link_url' => '/contact',
                'link_label' => 'Get This Quote',
                'day_rate' => 12000,
                'web_app_days' => 3.5,
                'api_days' => 2.2,
                'mobile_app_days' => 4.2,
                'ips_per_day' => 5,
                'breakdown_template' => '{apps} web apps + {apis} APIs + {mobile} mobile apps + {ips} IPs x {multiplier} approach multiplier',
                'initial_value' => 0,
                'initial_value_2' => 0,
                'initial_value_3' => 0,
                'initial_value_4' => 0,
            ],
        ]);
        $this->seedFeature('vapt_hero', [
            [
                'paragraph' => 'Vulnerability Assessment & Penetration Testing',
                'heading' => 'Find and Fix Security Risks',
                'label' => 'Before Attackers Do',
                'paragraph_2' => 'Cyberlog identifies, validates, and prioritizes exploitable weaknesses across web applications, APIs, mobile apps, networks, cloud, and infrastructure.',
                'label_2' => 'VAPT // Active Assessment',
                'icon' => 'fas fa-bug',
                'heading_2' => 'From Exposure to Exploit',
                'paragraph_3' => 'External exposure, authentication bypass, privilege escalation, and data-access impact.',
                'div_aria_label' => 'Live vulnerability activity graph',
                'label_3' => '24',
                'label_4' => 'findings',
                'label_5' => '1,842',
                'label_6' => 'requests tested',
                'div_aria_label_2' => 'VAPT assessment steps',
                'div_aria_label_3' => 'Live VAPT assessment log',
            ],
        ]);
        $this->seedFeature('vapt_hero_height_items', [
            [
                'value' => 36,
            ],
            [
                'value' => 58,
            ],
            [
                'value' => 44,
            ],
            [
                'value' => 72,
            ],
            [
                'value' => 51,
            ],
            [
                'value' => 84,
            ],
            [
                'value' => 63,
            ],
            [
                'value' => 46,
            ],
            [
                'value' => 76,
            ],
            [
                'value' => 57,
            ],
            [
                'value' => 88,
            ],
            [
                'value' => 68,
            ],
        ]);
        $this->seedFeature('vapt_hero_step_items', [
            [
                'value' => 'Recon',
            ],
            [
                'value' => 'Scan',
            ],
            [
                'value' => 'Exploit',
            ],
            [
                'value' => 'Report',
            ],
            [
                'value' => 'Retest',
            ],
        ]);
        $this->seedFeature('vapt_matrix', [
            [
                'paragraph' => 'Why Cyberlog VAPT',
                'heading' => 'Basic VAPT vs Cyberlog VAPT',
                'th_text' => 'Area',
                'th_text_2' => 'Basic VAPT',
                'th_text_3' => 'Cyberlog VAPT',
                'icon' => 'fas fa-circle-check me-2',
            ],
        ]);
        $this->seedFeature('vapt_matrix_rows', [
            [
                'item_0' => 'Testing Coverage',
                'item_1' => 'Limited asset testing',
                'item_2' => 'Web, API, mobile, network, cloud, and infrastructure testing',
            ],
            [
                'item_0' => 'Testing Method',
                'item_1' => 'Mostly automated scanning',
                'item_2' => 'Manual testing with automated validation',
            ],
            [
                'item_0' => 'Risk Validation',
                'item_1' => 'Lists vulnerabilities',
                'item_2' => 'Validates real exploitability and business impact',
            ],
            [
                'item_0' => 'Standards Alignment',
                'item_1' => 'Generic severity rating',
                'item_2' => 'CVSS, OWASP Top 10, and MITRE ATT&CK aligned',
            ],
            [
                'item_0' => 'Reporting',
                'item_1' => 'Technical findings only',
                'item_2' => 'Executive summary, technical details, proof of concept, and remediation',
            ],
            [
                'item_0' => 'Remediation Support',
                'item_1' => 'Limited guidance',
                'item_2' => 'Clear fix recommendations with priority',
            ],
            [
                'item_0' => 'Retesting',
                'item_1' => 'Not always included',
                'item_2' => 'Retesting support to confirm closure',
            ],
            [
                'item_0' => 'Outcome',
                'item_1' => 'Vulnerability list',
                'item_2' => 'Actionable risk reduction plan',
            ],
        ]);
        $this->seedFeature('vapt_numbers', [
            [
                'section_aria_label' => 'VAPT delivery metrics',
            ],
        ]);
        $this->seedFeature('vapt_posture', [
            [
                'label' => 'VAPT',
            ],
        ]);
        $this->seedFeature('vapt_posture_nodes', [
            [
                'side' => 'left',
                'slot' => '1',
                'icon' => 'fa-window-maximize',
                'label' => 'Web Application Testing',
                'color' => '#8f4dff',
                'rgb' => '143, 77, 255',
            ],
            [
                'side' => 'left',
                'slot' => '2',
                'icon' => 'fa-plug',
                'label' => 'API Security Testing',
                'color' => '#a051ff',
                'rgb' => '160, 81, 255',
            ],
            [
                'side' => 'left',
                'slot' => '3',
                'icon' => 'fa-mobile-screen-button',
                'label' => 'Mobile Application Testing',
                'color' => '#7d3cff',
                'rgb' => '125, 60, 255',
            ],
            [
                'side' => 'left',
                'slot' => '4',
                'icon' => 'fa-network-wired',
                'label' => 'Network Penetration Testing',
                'color' => '#9c5cff',
                'rgb' => '156, 92, 255',
            ],
            [
                'side' => 'right',
                'slot' => '1',
                'icon' => 'fa-cloud',
                'label' => 'Cloud Security Testing',
                'color' => '#ff4f68',
                'rgb' => '255, 79, 104',
            ],
            [
                'side' => 'right',
                'slot' => '2',
                'icon' => 'fa-sliders',
                'label' => 'Configuration Review',
                'color' => '#ff6b78',
                'rgb' => '255, 107, 120',
            ],
            [
                'side' => 'right',
                'slot' => '3',
                'icon' => 'fa-bug',
                'label' => 'Vulnerability Validation',
                'color' => '#ff475f',
                'rgb' => '255, 71, 95',
            ],
            [
                'side' => 'right',
                'slot' => '4',
                'icon' => 'fa-rotate',
                'label' => 'Remediation Retesting',
                'color' => '#ff7a4e',
                'rgb' => '255, 122, 78',
            ],
        ]);
        $this->seedFeature('vapt_reviews', [
            [
                'paragraph' => 'CLIENT FEEDBACK',
                'heading' => 'Our customers',
                'label' => 'say it best',
                'paragraph_2' => 'Recognized by clients for practical security delivery, clear reporting, and measurable improvements.',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'paragraph_3' => '“',
                'paragraph_4' => '”',
            ],
        ]);
        $this->seedFeature('vapt_reviews_reviews', [
            [
                'rating' => '5.0',
                'quote' => 'As Bangladesh\'s national investment platform, our systems can\'t afford weak points. Cyberlog\'s VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them—the kind of assessment a government platform needs.',
                'name' => 'BIDA (Bangladesh Investment Development Authority)',
                'logo' => 'images/clients/bida.png',
            ],
            [
                'rating' => '5.0',
                'quote' => 'Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog\'s assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.',
                'name' => 'a2i (Aspire to Innovate)',
                'logo' => 'images/clients/a2i.png',
            ],
            [
                'rating' => '5.0',
                'quote' => 'As a financial marketplace handling sensitive customer data, security testing isn\'t a formality for us—it\'s core to trust. Cyberlog\'s VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.',
                'name' => 'AamarTaka.com',
                'logo' => 'images/clients/aamar-taka.png',
            ],
        ]);
        $this->seedFeature('vapt_success', [
            [
                'paragraph' => 'System Success Story',
                'heading' => 'Bangladesh Finance Strengthened Its Digital Risk Visibility',
                'paragraph_2' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable risks across its digital environment. The engagement gave technical teams a clear remediation path and leadership a practical view of risk.',
                'link_url' => '/contact',
                'link_label' => 'Discuss a Similar Assessment',
                'label' => 'Financial Institute',
                'label_2' => 'VAPT Engagement',
                'b_text' => 'Scope',
                'b_text_2' => 'Validate',
                'b_text_3' => 'Prioritize',
                'b_text_4' => 'Retest',
            ],
        ]);
        $this->seedFeature('page_vapt', [
            [
                'title' => 'VAPT & Penetration Testing - Cyberlog',
                'meta_description' => 'Cyberlog VAPT and penetration testing services identify, validate, and prioritize exploitable risks across web apps, APIs, networks, cloud, and infrastructure.',
                'title_2' => 'Ready to test your defenses?',
                'text' => 'Book a scoping call and get a tailored VAPT quote for your applications, network, APIs, or cloud.',
            ],
        ]);
        $this->seedFeature('legacy_pages_vapt', [
            [
                'title' => 'VAPT & Penetration Testing — Cyberlog',
                'eyebrow' => 'Vulnerability Assessment & Penetration Testing',
                'heading' => 'Find &amp; Fix Risks <span class="text-teal">Before Attackers Do</span>',
                'subheading' => 'Cyberlog conducts VAPT to identify, validate, and prioritize exploitable security risks across your applications, networks, cloud, and infrastructure — with clear, actionable remediation.',
                'label' => 'Get a Quote',
                'url' => '#calculator',
                'hero_icon' => 'fas fa-bug',
                'hero_caption' => 'Offensive security testing',
                'paragraph' => 'Methodology',
                'heading_2' => 'Our Security Posture Assessment',
                'paragraph_2' => 'A 360° review of your attack surface, mapped to industry standards (OWASP, PTES, NIST).',
                'paragraph_3' => 'Pen Test Scoping',
                'heading_3' => 'Calculate Your VAPT Cost',
                'paragraph_4' => 'Pen test pricing depends on scope — number of applications, IPs, APIs, and the depth of testing required. Tell us about your environment and we\'ll return a tailored scope and quote.',
                'h5_text' => 'Scope your assessment',
                'label_text' => 'Test type',
                'option_text' => 'Web Application',
                'option_text_2' => 'Network / Infrastructure',
                'option_text_3' => 'Mobile App',
                'option_text_4' => 'API',
                'option_text_5' => 'Cloud',
                'label_text_2' => 'Testing approach',
                'option_text_6' => 'Black Box',
                'option_text_7' => 'Grey Box',
                'option_text_8' => 'White Box',
                'label_text_3' => 'Number of targets / assets',
                'input_placeholder' => 'e.g. 5',
                'label_text_4' => 'Business email',
                'input_placeholder_2' => 'you@company.com',
                'button_label' => 'Get a Custom Quote',
                'paragraph_5' => 'Coverage Matrix',
                'heading_4' => 'What Each Engagement Covers',
                'th_text' => 'Coverage',
                'th_text_2' => 'Standard',
                'th_text_3' => 'Advanced',
                'th_text_4' => 'Red Team',
                'icon' => 'fas fa-check text-teal',
                'icon_2' => 'fas fa-minus text-muted',
                'paragraph_6' => 'Testing Approaches',
                'heading_5' => 'Black, Grey & White Box',
                'icon_3' => 'fas fa-cube',
                'h4_text' => 'Black Box',
                'label_2' => 'Conditions:',
                'paragraph_7' => 'We try to penetrate the system and identify ways to harm your business, having minimum information about your company.',
                'label_3' => 'Value:',
                'paragraph_8' => 'Simulates a real-world external attacker and identifies technical and human-related security issues.',
                'icon_4' => 'fas fa-cube',
                'h4_text_2' => 'Grey Box',
                'label_4' => 'Conditions:',
                'paragraph_9' => 'We attack your business with general information about your infrastructure and system, including limited logins and access.',
                'label_5' => 'Value:',
                'paragraph_10' => 'The golden mean between quality and price — cheaper and faster than a full black-box approach.',
                'icon_5' => 'fas fa-cube',
                'h4_text_3' => 'White Box',
                'label_6' => 'Conditions:',
                'paragraph_11' => 'We try to hack your organization with full knowledge of logins, passwords, application source, and architecture.',
                'label_7' => 'Value:',
                'paragraph_12' => 'Uncovers hidden vulnerabilities that may go unnoticed in other types of pen tests.',
                'paragraph_13' => 'Why Cyberlog VAPT',
                'heading_6' => 'Benefits',
                'label_8' => 'Financial Institute',
                'heading_7' => 'Bangladesh Finance',
                'paragraph_14' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable security risks across its digital environment.',
                'title_2' => 'Ready to test your defenses?',
                'text' => 'Book a scoping call and get a tailored VAPT quote.',
            ],
        ]);
        $this->seedFeature('legacy_pages_vapt_p_items', [
            [
                'item_0' => 'fa-binoculars',
                'item_1' => 'Reconnaissance',
                'item_2' => 'Map the attack surface and gather intelligence on exposed assets.',
            ],
            [
                'item_0' => 'fa-radar',
                'item_1' => 'Scanning &amp; Enumeration',
                'item_2' => 'Identify open services, versions, and potential entry points.',
            ],
            [
                'item_0' => 'fa-bug',
                'item_1' => 'Exploitation',
                'item_2' => 'Safely validate which vulnerabilities are actually exploitable.',
            ],
            [
                'item_0' => 'fa-arrows-up-to-line',
                'item_1' => 'Privilege Escalation',
                'item_2' => 'Test lateral movement and depth of potential compromise.',
            ],
            [
                'item_0' => 'fa-file-shield',
                'item_1' => 'Reporting',
                'item_2' => 'Risk-rated findings with prioritized remediation guidance.',
            ],
            [
                'item_0' => 'fa-rotate',
                'item_1' => 'Re-testing',
                'item_2' => 'Verify that fixes hold and the risk is genuinely closed.',
            ],
        ]);
        $this->seedFeature('legacy_pages_vapt_row_items', [
            [
                'item_0' => 'Automated Vulnerability Scanning',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Manual Exploitation',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Business Logic Testing',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Social Engineering / Phishing',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Lateral Movement Simulation',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Detailed Remediation Report',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Free Re-test',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
        ]);
        $this->seedFeature('legacy_pages_vapt_b_items', [
            [
                'item_0' => 'fa-user-secret',
                'item_1' => 'Real attacker mindset',
                'item_2' => 'Certified offensive security experts who think and act like real adversaries.',
            ],
            [
                'item_0' => 'fa-list-check',
                'item_1' => 'Prioritized, validated findings',
                'item_2' => 'No noise — every reported risk is manually validated and risk-rated.',
            ],
            [
                'item_0' => 'fa-screwdriver-wrench',
                'item_1' => 'Actionable remediation',
                'item_2' => 'Clear, developer-friendly guidance to fix issues fast.',
            ],
            [
                'item_0' => 'fa-rotate',
                'item_1' => 'Free re-testing',
                'item_2' => 'We verify your fixes actually close the risk.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Compliance-ready reports',
                'item_2' => 'Reports mapped to ISO 27001, PCI-DSS, and regulatory needs.',
            ],
            [
                'item_0' => 'fa-handshake',
                'item_1' => 'Trusted partner',
                'item_2' => 'A long-term relationship, not a one-off scan.',
            ],
        ]);
        $this->seedFeature('vapt_hero_vapt_logs', [
            [
                'label' => '[VALIDATED]',
                'paragraph' => 'SQL injection impact confirmed',
            ],
            [
                'label' => '[MAPPED]',
                'paragraph' => 'OWASP access control weakness',
            ],
            [
                'label' => '[QUEUED]',
                'paragraph' => 'remediation evidence review',
            ],
        ]);
        $this->seedFeature('vapt_numbers_vapt_number_grid', [
            [
                'label' => '160+',
                'label_2' => 'Tests annually',
            ],
            [
                'label' => '1,440+',
                'label_2' => 'Vulnerabilities detected per year',
            ],
            [
                'label' => '2–4',
                'label_2' => 'Weeks an average penetration test lasts',
            ],
        ]);
        $this->seedFeature('vapt_success_vapt_success_stats', [
            [
                'label' => '360',
                'label_2' => 'Security risk review',
            ],
            [
                'label' => '10+',
                'label_2' => 'High-priority risks validated',
            ],
            [
                'label' => '100%',
                'label_2' => 'Actionable remediation plan',
            ],
        ]);
        $this->seedFeature('legacy_pages_vapt_links', [
            [
                'div_text' => '360°',
                'div_text_2' => 'Security Risk Review',
            ],
            [
                'div_text' => '10+',
                'div_text_2' => 'High-Priority Risks Validated',
            ],
        ]);
        $this->seedFeature('vapt_live_events', [
            [
                'item_0' => 'DISCOVERED',
                'item_1' => 'exposed admin endpoint identified',
            ],
            [
                'item_0' => 'TESTING',
                'item_1' => 'authentication flow under analysis',
            ],
            [
                'item_0' => 'VALIDATED',
                'item_1' => 'broken access control impact confirmed',
            ],
            [
                'item_0' => 'MAPPED',
                'item_1' => 'finding mapped to OWASP Top 10',
            ],
            [
                'item_0' => 'BLOCKED',
                'item_1' => 'rate limit engaged during safe test',
            ],
            [
                'item_0' => 'CAPTURED',
                'item_1' => 'evidence package securely recorded',
            ],
            [
                'item_0' => 'RETESTED',
                'item_1' => 'remediation successfully verified',
            ],
            [
                'item_0' => 'QUEUED',
                'item_1' => 'business-logic test case scheduled',
            ],
        ]);
    }
}
