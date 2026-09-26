<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocExpertSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
