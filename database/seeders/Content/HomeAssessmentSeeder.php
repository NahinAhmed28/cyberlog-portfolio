<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeAssessmentSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
