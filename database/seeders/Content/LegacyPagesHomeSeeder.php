<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesHomeSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
