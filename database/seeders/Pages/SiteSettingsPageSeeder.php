<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class SiteSettingsPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('site_public', [
            [
                'default_meta_description' => 'Cyberlog — offensive security, managed SOC, compliance, threat intelligence and vCISO for enterprises, government, financial institutions and critical infrastructure.',
                'default_title' => 'Cyberlog — Cyber Defense',
                'link_media' => 'assets/img/cyberlog-logo.png',
            ],
        ]);
        $this->seedFeature('layout_portfolio', [
            [
                'default_title' => 'My Portfolio',
                'link_media' => 'assets/img/cyberlog-logo.png',
            ],
        ]);
        $this->seedFeature('shared_page_hero', [
            [
                'icon' => 'fas fa-shield-halved',
                'default_text' => 'Talk to an Expert',
                'default_text_2' => 'Enterprise-grade cyber defense',
                'default_hero_icon' => 'fas fa-shield-halved',
            ],
        ]);
        $this->seedFeature('shared_reviews', [
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
        $this->seedFeature('shared_reviews_reviews', [
            [
                'source' => 'BIDA (Bangladesh Investment Development Authority)',
                'sourceKey' => 'bida',
                'logo' => 'images/clients/bida.png',
                'award' => 'National Investment Platform Assessment',
                'rating' => '5.0',
                'quote' => 'As Bangladesh\'s national investment platform, our systems can\'t afford weak points. Cyberlog\'s VAPT team identified real, exploitable risks across our platform and gave us a clear path to fix them, the kind of assessment a government platform needs.',
            ],
            [
                'source' => 'a2i (Aspire to Innovate)',
                'sourceKey' => 'a2i',
                'logo' => 'images/clients/a2i.png',
                'award' => 'Methodical & Thorough Security Testing',
                'rating' => '5.0',
                'quote' => 'Our digital services reach millions of citizens, so security testing has to be thorough and precise. Cyberlog\'s assessment was methodical, well-documented, and gave our technical team exactly the evidence needed to prioritize fixes.',
            ],
            [
                'source' => 'AamarTaka.com',
                'sourceKey' => 'aamartaka',
                'logo' => 'images/clients/aamar-taka.png',
                'award' => 'Core Trust & Actionable Engineering Reports',
                'rating' => '5.0',
                'quote' => 'As a financial marketplace handling sensitive customer data, security testing isn\'t a formality for us, it\'s core to trust. Cyberlog\'s VAPT team found real, practical risks in our platform and helped us close them fast, with reporting our engineering team could act on immediately.',
            ],
        ]);
        $this->seedFeature('shared_talk_to_expert', [
            [
                'default_text' => 'Still evaluating your security options?',
                'default_text_2' => 'We\'ll walk you through the pros, cons, and pricing.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
            ],
        ]);
        $this->seedFeature('legacy_portfolio_index', [
            [
                'title' => 'Cyberlog',
                'heading' => 'Smarter Intelligence. Stronger Security.',
                'paragraph' => 'Join our Cyber Defense eco-system with',
                'label_5' => 'hundreds',
                'paragraph_2' => 'of other organizations!',
                'heading_2' => 'Explore Our Security Solutions',
                'icon' => 'fas fa-shield-halved',
                'h4_text_6' => 'vCISO',
                'paragraph_8' => 'Virtual CISO support for governance, compliance, strategy, and cyber resilience.',
                'heading_3' => 'Trusted Clients',
                'icon_2' => 'fas fa-building-shield',
                'heading_4' => 'Client Success Stories',
                'icon_3' => 'fas fa-chart-line',
                'heading_5' => 'Our Story',
                'icon_4' => 'fas fa-star',
                'paragraph_13' => 'Cyberlog helps organizations strengthen their cyber resilience through offensive security, managed security operations, compliance readiness, and expert advisory services.',
                'heading_6' => 'Contact Cyberlog',
                'icon_5' => 'fas fa-envelope',
                'input_placeholder' => 'Enter your name',
                'label_text' => 'Full name',
                'input_placeholder_2' => 'name@example.com',
                'label_text_2' => 'Email address',
                'textarea_placeholder' => 'Enter your message',
                'label_text_3' => 'Message',
                'button_label' => 'Send Message',
            ],
        ]);
        $this->seedFeature('legacy_portfolio_index_cards', [
            [
                'h4_text' => 'Dhaka Stock Exchange',
                'paragraph' => 'Cyberlog delivered SOC support for Bangladesh’s most critical capital market infrastructure.',
                'label' => '24/7 SOC Monitoring',
                'label_2' => '99.99% uptime for Capital Market Cyber Defense',
            ],
            [
                'h4_text' => 'Bangladesh Finance',
                'paragraph' => 'Cyberlog conducted VAPT to identify, validate, and prioritize exploitable security risks.',
                'label' => '360° Security Risk Review',
                'label_2' => '10+ High-Priority Risks Validated',
            ],
            [
                'h4_text' => 'BIDA',
                'paragraph' => 'Cybersecurity capacity building and assessment support to improve technical readiness.',
                'label' => '250%+ Increase in Cybersecurity Skills',
                'label_2' => '12 Security Areas Reviewed',
            ],
            [
                'h4_text' => 'Adcomm Limited',
                'paragraph' => 'ISO 27001 implementation and cybersecurity capacity building for compliance readiness.',
                'label' => '93 ISO Controls Mapped',
                'label_2' => '200+ Employees Trained',
            ],
        ]);
        $this->seedFeature('legacy_portfolio_index_links', [
            [
                'div_text' => 'Aspire to Innovate, a2i',
            ],
            [
                'div_text' => 'Aamar Taka',
            ],
            [
                'div_text' => 'Adcomm Limited',
            ],
            [
                'div_text' => 'Bangladesh Finance',
            ],
            [
                'div_text' => 'BIDA',
            ],
            [
                'div_text' => 'BPI',
            ],
            [
                'div_text' => 'Bangladesh Police',
            ],
            [
                'div_text' => 'BUBT',
            ],
            [
                'div_text' => 'Dhaka Stock Exchange',
            ],
            [
                'div_text' => 'LegalX',
            ],
            [
                'div_text' => 'NAPD',
            ],
            [
                'div_text' => 'Nazimgarh Resort',
            ],
            [
                'div_text' => 'ReachSavvy',
            ],
            [
                'div_text' => 'Vibe Gaming',
            ],
        ]);
        $this->seedFeature('legacy_portfolio_index_links_2', [
            [
                'h4_text' => 'SOC',
                'paragraph' => '24/7 monitoring, threat detection, and incident response support.',
            ],
            [
                'h4_text' => 'VAPT',
                'paragraph' => 'Vulnerability assessment and penetration testing for digital systems.',
            ],
            [
                'h4_text' => 'IT Audit',
                'paragraph' => 'Security audit, compliance review, and ISO 27001 readiness support.',
            ],
            [
                'h4_text' => 'Capacity Building',
                'paragraph' => 'Cybersecurity training to improve employee awareness and readiness.',
            ],
            [
                'h4_text' => 'Defense Services',
                'paragraph' => 'Threat intelligence, incident response, firewall management, backup, and risk assessment.',
            ],
        ]);
        $this->seedFeature('legacy_portfolio_index_links_3', [
            [
                'label' => 'Penetration Testing',
            ],
            [
                'label' => 'Security Operations Center (SOC)',
            ],
            [
                'label' => 'Security Audit & Training',
            ],
            [
                'label' => 'vCISO',
            ],
        ]);
        $this->seedFeature('threat_feed_events', [
            [
                'item_0' => 'crit',
                'item_1' => 'BLOCKED',
                'item_2' => 'brute-force attempt · 203.0.113.*',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'CLEAN',
                'item_2' => 'endpoint scan · 1,204 assets',
            ],
            [
                'item_0' => 'warn',
                'item_1' => 'TRIAGE',
                'item_2' => 'anomalous login · finance-vlan',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'PATCHED',
                'item_2' => 'CVE-2026-1180 · 38 hosts',
            ],
            [
                'item_0' => 'crit',
                'item_1' => 'QUARANTINE',
                'item_2' => 'malware sample · sandbox-07',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'VERIFIED',
                'item_2' => 'MFA challenge · success',
            ],
            [
                'item_0' => 'warn',
                'item_1' => 'WATCH',
                'item_2' => 'data egress spike · 4.2GB',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'CONTAINED',
                'item_2' => 'phishing url · sinkholed',
            ],
            [
                'item_0' => 'crit',
                'item_1' => 'DENIED',
                'item_2' => 'lateral move · host-1142',
            ],
            [
                'item_0' => 'ok',
                'item_1' => 'SYNCED',
                'item_2' => 'threat intel feed · updated',
            ],
        ]);
    }
}
