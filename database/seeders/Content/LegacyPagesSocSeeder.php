<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesSocSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
