<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class SocPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_benefits', [
            [
                'paragraph' => 'Why Cyberlog SOC',
                'heading' => 'SOC Benefits',
            ],
        ]);
        $this->seedFeature('soc_benefits_benefits', [
            [
                'item_0' => 'fa-bolt',
                'item_1' => 'Real-Time Threat Detection',
                'item_2' => 'Monitor logs, alerts, and security events to detect threats before they cause serious impact.',
            ],
            [
                'item_0' => 'fa-layer-group',
                'item_1' => 'Centralized Security Visibility',
                'item_2' => 'Bring logs from servers, networks, endpoints, and applications into one monitoring environment.',
            ],
            [
                'item_0' => 'fa-volume-xmark',
                'item_1' => 'Reduced Alert Noise',
                'item_2' => 'Use customized alert rules to reduce false positives and help teams focus on real threats.',
            ],
            [
                'item_0' => 'fa-hand-fist',
                'item_1' => 'Faster Incident Response',
                'item_2' => 'Support alert triage, investigation, containment, and response when suspicious activity is detected.',
            ],
            [
                'item_0' => 'fa-crosshairs',
                'item_1' => 'Proactive Threat Hunting',
                'item_2' => 'Look beyond routine alerts to identify hidden threats, unusual behavior, and attack patterns.',
            ],
            [
                'item_0' => 'fa-fingerprint',
                'item_1' => 'Forensics Support',
                'item_2' => 'Support digital and network forensics to investigate incidents and understand root cause.',
            ],
        ]);
        $this->seedFeature('soc_calculator', [
            [
                'paragraph' => 'SOC as a Service',
                'heading' => 'Estimate Your',
                'label' => 'SOC Cost',
                'paragraph_2' => 'Managed SOC pricing scales with your environment — endpoints, log volume, and coverage level. Move the sliders for an indicative monthly figure, then request a tailored quote for your exact scope.',
                'label_2' => 'Endpoints / devices',
                'label_3' => '1',
                'input_min' => 1,
                'input_max' => 1000,
                'input_step' => 1,
                'label_4' => 'Log volume',
                'small_text' => '(GB / day)',
                'label_5' => '1',
                'input_min_2' => 1,
                'input_max_2' => 1000,
                'input_step_2' => 1,
                'label_6' => 'Coverage',
                'button_data_mult' => 1,
                'button_label' => '24 / 7',
                'button_data_mult_2' => 0.62,
                'button_label_2' => 'Business hours',
                'div_text' => '$',
                'label_7' => '0',
                'small_text_2' => '/mo',
                'link_label' => 'Get a Tailored Quote',
                'base_cost' => 1500,
                'per_endpoint' => 4,
                'per_gb' => 35,
                'rounding_increment' => 50,
                'destination' => '/contact',
                'initial_value' => 1,
                'initial_value_2' => 1,
            ],
        ]);
        $this->seedFeature('soc_comparison', [
            [
                'paragraph' => 'Comparison',
                'heading' => 'Which SOC Model Delivers Real Value?',
                'th_text' => 'SOC Model',
                'th_text_2' => 'Setup Time',
                'th_text_3' => 'MTTR (hrs)',
                'th_text_4' => 'Threats Stopped',
                'th_text_5' => 'SLA / KPI',
            ],
        ]);
        $this->seedFeature('soc_comparison_rows', [
            [
                'model' => 'In-House SOC',
                'cost' => '$750,000',
                'setup' => '9 months',
                'mttr' => '4.5',
                'stopped' => '75%',
                'sla' => '70%',
                'hl' => false,
            ],
            [
                'model' => 'Hybrid SOC (Co-Managed)',
                'cost' => '$400,000',
                'setup' => '5 months',
                'mttr' => '2.5',
                'stopped' => '85%',
                'sla' => '85%',
                'hl' => false,
            ],
            [
                'model' => 'Fully Outsourced SOC',
                'cost' => '$280,000',
                'setup' => '2 months',
                'mttr' => '1.0',
                'stopped' => '90%',
                'sla' => '88%',
                'hl' => false,
            ],
            [
                'model' => 'UnderDefense SOCaaS',
                'cost' => '$192,000',
                'setup' => '1 month',
                'mttr' => '0.5',
                'stopped' => '96%',
                'sla' => '99.9%',
                'hl' => false,
            ],
            [
                'model' => 'Cyberlog SOC',
                'cost' => '$150,000',
                'setup' => '2 weeks',
                'mttr' => '0.4',
                'stopped' => '97%',
                'sla' => '99.95%',
                'hl' => true,
            ],
        ]);
        $this->seedFeature('soc_expert', [
            [
                'paragraph' => 'Talk to Our SOC Team',
                'heading' => 'Need',
                'label' => 'SOC Support?',
                'paragraph_2' => 'Discuss your SOC requirement with Cyberlog. We can help with SOC implementation, SIEM monitoring, alert triage, threat detection, and incident response support.',
                'icon' => 'fas fa-location-dot text-primary me-2',
                'list_text' => 'Dhaka, Bangladesh',
                'icon_2' => 'fas fa-envelope text-primary me-2',
                'a_href' => 'mailto:info@cyberlog.bd',
                'link_label' => 'info@cyberlog.bd',
                'icon_3' => 'fas fa-phone text-primary me-2',
                'list_text_2' => '+88013576990884',
                'input_placeholder_3' => 'Work Email',
                'input_placeholder_4' => 'Phone Number',
                'option_text' => 'Coverage Needed',
                'option_text_2' => 'SOC Implementation',
                'option_text_3' => 'Fully Managed SOC',
                'option_text_4' => 'Co-managed SOC',
                'option_text_5' => 'SIEM Monitoring',
                'option_text_6' => 'Incident Response Support',
                'option_text_7' => 'Not Sure Yet',
                'textarea_placeholder' => 'Tell Us About Your Environment',
                'icon_4' => 'fas fa-headset me-1',
                'button_label' => 'Talk to an Expert',
                'name_placeholder' => 'Your Name',
                'company_placeholder' => 'Company Name',
            ],
        ]);
        $this->seedFeature('soc_hero', [
            [
                'paragraph' => 'Security Operations Center',
                'heading' => '24/7',
                'label' => 'SOC',
                'paragraph_2' => 'Cyberlog provides fully managed and co-managed SOC support, SOC solution to monitor security events, detect threats, reduce alert noise, and support faster incident response.',
                'link_label' => 'Talk to an Expert',
                'a_href' => '#calculator',
                'icon' => 'fas fa-calculator me-1',
                'link_label_2' => 'SOC Cost Calculator',
                'label_2' => 'SOC // Live Operations',
                'label_3' => '1204',
                'label_4' => 'Alerts Triaged',
                'label_5' => '0.5h',
                'label_6' => 'Mean MTTR',
                'label_7' => '38',
                'label_8' => 'Threats Blocked',
                'div_aria_label' => 'Live security event log',
                'destination' => '/contact',
            ],
        ]);
        $this->seedFeature('soc_hero_height_items', [
            [
                'value' => 24,
            ],
            [
                'value' => 46,
            ],
            [
                'value' => 34,
            ],
            [
                'value' => 22,
            ],
            [
                'value' => 38,
            ],
            [
                'value' => 44,
            ],
            [
                'value' => 31,
            ],
            [
                'value' => 58,
            ],
            [
                'value' => 36,
            ],
            [
                'value' => 52,
            ],
            [
                'value' => 61,
            ],
            [
                'value' => 68,
            ],
            [
                'value' => 35,
            ],
            [
                'value' => 28,
            ],
            [
                'value' => 42,
            ],
        ]);
        $this->seedFeature('soc_matrix', [
            [
                'paragraph' => 'Managed SOC Coverage',
                'heading' => 'What\'s Included in Each Tier',
                'paragraph_2' => 'Choose the level of monitoring, response, and analyst support your environment requires.',
                'th_text' => 'Capability',
                'span_aria_label' => 'Included',
                'icon' => 'fas fa-check',
                'span_aria_label_2' => 'Not included',
            ],
        ]);
        $this->seedFeature('soc_matrix_caps', [
            [
                'item_0' => '24/7 Monitoring & Triage',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'SIEM Management',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Compliance Reporting',
                'item_1' => 1,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Threat Intelligence Feeds',
                'item_1' => 0,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Managed Detection & Response (MDR)',
                'item_1' => 0,
                'item_2' => 1,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Proactive Threat Hunting',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Incident Response Retainer',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
            [
                'item_0' => 'Dedicated SOC Analyst',
                'item_1' => 0,
                'item_2' => 0,
                'item_3' => 1,
            ],
        ]);
        $this->seedFeature('soc_matrix_tiers', [
            [
                'value' => 'Essential',
            ],
            [
                'value' => 'Advanced',
            ],
            [
                'value' => 'Enterprise',
            ],
        ]);
        $this->seedFeature('soc_numbers', [
            [
                'paragraph' => 'Operational Impact',
                'heading' => 'Cyberlog SOC',
                'paragraph_2' => 'Managed Services by the Numbers',
            ],
        ]);
        $this->seedFeature('soc_pricing', [
            [
                'paragraph' => 'Pricing',
                'heading' => 'Custom SOC Plans',
                'label' => 'Most Popular',
                'div_text' => 'Custom',
                'icon' => 'fas fa-circle-check text-primary me-2',
                'link_label' => 'Get a Quote',
                'destination' => '/contact',
            ],
        ]);
        $this->seedFeature('soc_pricing_plans', [
            [
                'item_0' => 'Essential',
                'item_1' => 'For organizations starting with structured SOC monitoring and basic security visibility.',
                'item_2' => [
                    'SIEM setup and configuration',
                    'Log collection from key systems',
                    'Alert monitoring and triage',
                    'Monthly security summary',
                    'Basic incident guidance',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Advanced',
                'item_1' => 'For organizations that need stronger detection, response support, and threat intelligence.',
                'item_2' => [
                    'Everything in Essential',
                    'Custom detection rules',
                    'Threat intelligence support',
                    'Incident investigation support',
                    'Regular tuning and reporting',
                    'Remediation guidance',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Enterprise',
                'item_1' => 'For high-risk, regulated, or large environments that need full SOC coverage and response readiness.',
                'item_2' => [
                    'Everything in Advanced',
                    'Dedicated SOC analyst support',
                    'Proactive threat hunting',
                    'Digital and network forensics support',
                    'Incident response retainer',
                    'Executive reporting',
                    'Compliance & audit support (ISO 27001, regulatory reporting)',
                ],
                'item_3' => false,
            ],
        ]);
        $this->seedFeature('soc_reviews', [
            [
                'paragraph' => 'CLIENT FEEDBACK',
                'heading' => 'Our customers',
                'label' => 'say it best',
                'paragraph_2' => 'Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'paragraph_3' => '“',
                'paragraph_4' => '”',
            ],
        ]);
        $this->seedFeature('soc_reviews_reviews', [
            [
                'source' => 'Dhaka Stock Exchange (DSE)',
                'sourceKey' => 'dse',
                'logo' => 'images/clients/feedback/03-dhaka-stock-exchange.png',
                'rating' => '5.0',
                'quote' => 'As a critical financial infrastructure provider, security visibility isn\'t optional for us. Cyberlog\'s SOC team gave us continuous monitoring and faster incident response across our trading systems, with reporting our management could actually act on.',
            ],
            [
                'source' => 'Bangladesh Petroleum Institute (BPI)',
                'sourceKey' => 'bpi',
                'logo' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
                'rating' => '5.0',
                'quote' => 'Cyberlog helped us structure our security monitoring from the ground up, better log visibility, faster alert triage, and clear guidance whenever something needed attention.',
            ],
            [
                'source' => 'Adcomm Limited',
                'sourceKey' => 'adcomm',
                'logo' => 'images/clients/feedback/12. Adcomm_51_1409.png',
                'rating' => '5.0',
                'quote' => 'Cyberlog\'s SOC support gave our team peace of mind. Their alerts were relevant, not noisy, and their incident response guidance was practical and easy for us to follow.',
            ],
        ]);
        $this->seedFeature('soc_sensor', [
            [
                'paragraph' => 'New System Sensor',
                'heading' => 'Continuous Telemetry, Everywhere',
                'paragraph_2' => 'Cyberlog deploys sensors across your environment so nothing happens off-camera — feeding one correlated view of risk.',
            ],
        ]);
        $this->seedFeature('soc_sensor_sensors', [
            [
                'item_0' => 'fa-network-wired',
                'item_1' => 'Network Sensor',
                'item_2' => 'Deep packet inspection and east-west traffic analysis to surface lateral movement early.',
            ],
            [
                'item_0' => 'fa-laptop-code',
                'item_1' => 'Endpoint Sensor',
                'item_2' => 'Lightweight agents stream endpoint telemetry for rapid detection and response.',
            ],
            [
                'item_0' => 'fa-cloud',
                'item_1' => 'Cloud Sensor',
                'item_2' => 'Native cloud integrations monitor identities, workloads, and misconfigurations in real time.',
            ],
        ]);
        $this->seedFeature('page_soc', [
            [
                'title' => 'SOC as a Service — 24/7 Security Operations — Cyberlog',
                'title_2' => 'Still evaluating SOC options?',
                'text' => 'We\'ll walk you through the pros, cons, and pricing — no pressure.',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc', [
            [
                'title' => 'SOC as a Service — Cyberlog',
                'eyebrow' => 'Security Operations Center',
                'heading' => '24/7 <span class="text-teal">SOC-as-a-Service</span>',
                'subheading' => 'Cyberlog provides fully or co-managed SOC services that detect threats in real time, cut alert noise, and stop attacks before they cause damage — all while integrating seamlessly with your existing tools.',
                'label' => 'Talk to an Expert',
                'label_2' => 'SOC Calculator',
                'url' => '#calculator',
                'hero_icon' => 'fas fa-desktop',
                'hero_caption' => '24/7 Security Operations Center',
                'paragraph' => 'Comparison',
                'heading_2' => 'Which SOC Model Delivers Real Value?',
                'paragraph_2' => 'We compared four SOC models for a typical mid-sized business (500 employees, hybrid environment, 200 devices). Here\'s how they stack up on cost, speed, and security outcomes.',
                'th_text' => 'SOC Model',
                'th_text_2' => 'Estimated Yearly Cost (USD)',
                'th_text_3' => 'Setup Time',
                'th_text_4' => 'MTTR (hours)',
                'th_text_5' => '% Threats Stopped Before Damage',
                'th_text_6' => 'SLA / KPI Score',
                'td_text_19' => 'Cyberlog SOCaaS',
                'td_text_20' => '$192,000',
                'td_text_21' => '1 week',
                'td_text_22' => '0.5',
                'td_text_23' => '96%',
                'td_text_24' => '99.9%',
                'paragraph_3' => 'SOC as a Service',
                'heading_3' => 'Calculate Your SOC Cost',
                'paragraph_4' => 'The average managed SOC service ranges from $10 to $20 per asset per month, depending on the number of endpoints, log volume, coverage level, and response needs. Use our SOC calculator to get a personalized estimate, or explore plans that fit your environment and compliance needs.',
                'h5_text' => 'Calculate your SOC cost',
                'label_text_3' => 'Security tools in use',
                'input_placeholder' => 'e.g. CrowdStrike, Microsoft Defender',
                'label_text_4' => 'Business email',
                'input_placeholder_2' => 'you@company.com',
                'button_label' => 'Get a Custom Quote',
                'paragraph_5' => 'Coverage Matrix',
                'heading_4' => 'What\'s Included in Each Tier',
                'th_text_7' => 'Capability',
                'th_text_8' => 'Essential',
                'th_text_9' => 'Advanced',
                'th_text_10' => 'Enterprise',
                'icon' => 'fas fa-check text-teal',
                'icon_2' => 'fas fa-minus text-muted',
                'paragraph_6' => 'Cyberlog SOC as a Service',
                'heading_5' => 'Benefits',
                'paragraph_7' => 'New System Sensor',
                'heading_6' => 'Continuous Telemetry, Everywhere',
                'title_2' => 'Still Evaluating SOC Options?',
                'text' => 'We\'ll walk you through the pros, cons, and pricing.',
                'paragraph_8' => 'Pricing',
                'heading_7' => 'Custom SOC Plans',
                'label_3' => 'Most Popular',
                'div_text' => 'Custom',
                'icon_3' => 'fas fa-check text-teal me-2',
                'link_url' => '/contact',
                'link_label' => 'Get a Quote',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_row_items', [
            [
                'item_0' => '24/7 Monitoring &amp; Triage',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'SIEM Management',
                'item_1' => true,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Threat Intelligence Feeds',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Managed Detection &amp; Response (MDR)',
                'item_1' => false,
                'item_2' => true,
                'item_3' => true,
            ],
            [
                'item_0' => 'Proactive Threat Hunting',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Incident Response Retainer',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
            [
                'item_0' => 'Dedicated SOC Analyst',
                'item_1' => false,
                'item_2' => false,
                'item_3' => true,
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_b_items', [
            [
                'item_0' => 'fa-gauge-high',
                'item_1' => 'Faster than an in-house SOC team',
                'item_2' => 'Our SOC is a live, battle-tested response engine that detects, contains, and remediates faster.',
            ],
            [
                'item_0' => 'fa-chart-line',
                'item_1' => 'Operational clarity &amp; measurable outcomes',
                'item_2' => 'Get full visibility with detailed reporting and real measurable outcomes for every incident.',
            ],
            [
                'item_0' => 'fa-volume-off',
                'item_1' => 'Tool optimization &amp; alert noise reduction',
                'item_2' => 'We tune your stack to cut false positives and alert fatigue so analysts focus on real threats.',
            ],
            [
                'item_0' => 'fa-crosshairs',
                'item_1' => 'Proactive threat hunting, not just monitoring',
                'item_2' => 'We hunt for hidden threats across networks, endpoints, and the cloud — not just passive alerts.',
            ],
            [
                'item_0' => 'fa-bolt',
                'item_1' => 'Instant kickoff with a mature SOCaaS team',
                'item_2' => 'Skip the hiring delays. Onboard in days with a mature, ready-to-run SOC capability.',
            ],
            [
                'item_0' => 'fa-robot',
                'item_1' => 'Human-led security with smart tech',
                'item_2' => 'Our SOC pairs expert human analysts with AI-driven automation to reduce dwell time.',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_s_items', [
            [
                'item_0' => 'fa-network-wired',
                'item_1' => 'Network Sensor',
                'item_2' => 'Deep packet inspection and east-west traffic analysis to spot lateral movement early.',
            ],
            [
                'item_0' => 'fa-laptop-code',
                'item_1' => 'Endpoint Sensor',
                'item_2' => 'Lightweight agents stream endpoint telemetry for rapid detection and response.',
            ],
            [
                'item_0' => 'fa-cloud',
                'item_1' => 'Cloud Sensor',
                'item_2' => 'Native cloud integrations monitor identities, workloads, and misconfigurations.',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_plan_items', [
            [
                'item_0' => 'Essential',
                'item_1' => 'For growing teams getting started with managed detection.',
                'item_2' => [
                    '24/7 monitoring &amp; triage',
                    'SIEM management',
                    'Monthly reporting',
                ],
                'item_3' => false,
            ],
            [
                'item_0' => 'Advanced',
                'item_1' => 'For organizations that need MDR and threat intelligence.',
                'item_2' => [
                    'Everything in Essential',
                    'Managed Detection &amp; Response',
                    'Threat intelligence feeds',
                ],
                'item_3' => true,
            ],
            [
                'item_0' => 'Enterprise',
                'item_1' => 'For regulated, high-value environments needing full coverage.',
                'item_2' => [
                    'Everything in Advanced',
                    'Proactive threat hunting',
                    'Dedicated SOC analyst &amp; IR retainer',
                ],
                'item_3' => false,
            ],
        ]);
        $this->seedFeature('soc_expert_links', [
            [
                'input_placeholder' => 'Your Name',
            ],
            [
                'input_placeholder' => 'Company Name',
            ],
        ]);
        $this->seedFeature('soc_hero_soc_log', [
            [
                'paragraph' => '13:15:50',
                'label' => '[VERIFIED]',
                'paragraph_2' => 'MFA challenge - success',
            ],
            [
                'paragraph' => '13:15:48',
                'label' => '[WATCHED]',
                'paragraph_2' => 'CVE-2026-1100 - 36 hosts',
            ],
            [
                'paragraph' => '13:15:46',
                'label' => '[QUARANTINE]',
                'paragraph_2' => 'malware sample - sandbox-07',
            ],
            [
                'paragraph' => '13:15:44',
                'label' => '[BLOCKED]',
                'paragraph_2' => 'brute-force - 203.0.113.*',
            ],
            [
                'paragraph' => '13:15:42',
                'label' => '[DENIED]',
                'paragraph_2' => 'lateral move - host-1142',
            ],
        ]);
        $this->seedFeature('soc_numbers_cards', [
            [
                'div_text' => '01',
                'div_text_2' => '#1',
                'div_text_3' => 'SOC provider in Bangladesh for government & enterprise-grade threat response',
            ],
            [
                'div_text' => '02',
                'div_text_2' => '510%',
                'div_text_3' => 'Return on investment over 3 years vs. building an in-house SOC',
            ],
            [
                'div_text' => '03',
                'div_text_2' => '3 min',
                'div_text_3' => 'Average mean time to respond (MTTR) from alert to analyst action',
            ],
            [
                'div_text' => '04',
                'div_text_2' => '97%',
                'div_text_3' => 'Accurate detection rate — filtering noise so your team only sees real threats',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_cards', [
            [
                'label_text' => 'Number of employees',
                'option_text' => '1 - 100',
                'option_text_2' => '100 - 500',
                'option_text_3' => '500 - 1000',
                'option_text_4' => '1000+',
            ],
            [
                'label_text' => 'Assets to protect',
                'option_text' => '50 - 200',
                'option_text_2' => '200 - 500',
                'option_text_3' => '500 - 1000',
                'option_text_4' => '1000+',
            ],
        ]);
        $this->seedFeature('legacy_pages_soc_tr_items', [
            [
                'td_text' => 'In-House SOC',
                'td_text_2' => '$750,000',
                'td_text_3' => '6 months',
                'td_text_4' => '4.0',
                'td_text_5' => '70%',
                'td_text_6' => '70%',
            ],
            [
                'td_text' => 'Hybrid SOC (Co-Managed)',
                'td_text_2' => '$400,000',
                'td_text_3' => '1 month',
                'td_text_4' => '2.5',
                'td_text_5' => '90%',
                'td_text_6' => '90%',
            ],
            [
                'td_text' => 'Fully Outsourced SOC',
                'td_text_2' => '$280,000',
                'td_text_3' => '2 weeks',
                'td_text_4' => '1.5',
                'td_text_5' => '92%',
                'td_text_6' => '92%',
            ],
        ]);
        $this->seedFeature('soc_live_events', [
            [
                'item_0' => 'VERIFIED',
                'item_1' => 'MFA challenge - success',
            ],
            [
                'item_0' => 'WATCHED',
                'item_1' => 'unusual egress - finance-vlan',
            ],
            [
                'item_0' => 'QUARANTINE',
                'item_1' => 'malware sample - sandbox-07',
            ],
            [
                'item_0' => 'BLOCKED',
                'item_1' => 'brute-force - 203.0.113.*',
            ],
            [
                'item_0' => 'DENIED',
                'item_1' => 'lateral move - host-1142',
            ],
            [
                'item_0' => 'TRIAGED',
                'item_1' => 'identity alert - account-207',
            ],
            [
                'item_0' => 'CONTAINED',
                'item_1' => 'phishing URL - mail-gateway',
            ],
            [
                'item_0' => 'PATCHED',
                'item_1' => 'critical CVE - 18 hosts',
            ],
        ]);
    }
}
