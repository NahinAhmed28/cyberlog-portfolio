<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPortfolioIndexSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
