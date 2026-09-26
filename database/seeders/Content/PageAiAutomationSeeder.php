<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageAiAutomationSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_ai_automation', [
            [
                'title' => 'Cyberlog - AI & Automation',
                'paragraph' => 'AI & Automation',
                'heading' => 'AI &',
                'label' => 'Automation',
                'paragraph_2' => 'Cyberlog designs and builds intelligent automation systems for government, enterprise, and public service delivery, from smart city platforms and city corporation automation to workflow and workshop management systems. We turn manual, disconnected processes into smart, connected, and self-managing operations.',
                'link_label' => 'Talk to an Expert',
                'source_media' => 'assets/img/services/AI-and-Automation.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'paragraph_3' => 'The Evolution',
                'heading_2' => 'From Manual Operations to',
                'label_2' => 'Intelligent Automation',
                'paragraph_4' => 'How institutions and industries have moved from disconnected, paper-based processes toward smart, self-operating systems.',
                'div_text' => 'Evolution // 2015 – 2026',
                'div_text_14' => '2026',
                'div_text_15' => 'Smart, self-operating systems become industry standard',
                'paragraph_5' => 'WHY CYBERLOG AI & AUTOMATION',
                'heading_3' => 'AI & Automation',
                'label_3' => 'Benefits',
                'paragraph_6' => 'Our AI-powered solutions help organizations automate operations, improve efficiency, reduce costs, and make smarter decisions through connected digital systems.',
                'paragraph_13' => 'CLIENT FEEDBACK',
                'heading_4' => 'Our Clients',
                'label_4' => 'Say It Best',
                'paragraph_14' => 'Cyberlog\'s AI and automation solutions help organizations modernize operations, reduce manual work, and deliver faster, smarter services.',
                'img_media_3' => 'images/clients/akij-venture-official.png',
                'heading_7' => 'Akij Venture Ltd.',
                'div_aria_label_3' => '5.0 out of 5 stars',
                'icon_17' => 'fas fa-star',
                'icon_18' => 'fas fa-star',
                'icon_19' => 'fas fa-star',
                'icon_20' => 'fas fa-star',
                'icon_21' => 'fas fa-star',
                'label_7' => '5.0',
                'paragraph_17' => '“Cyberlog delivered an automation platform that perfectly matched our workflow. The solution streamlined operations and improved efficiency across the organization.”',
                'title_2' => 'Ready to put AI to work?',
                'text' => 'Talk with our experts about a practical automation roadmap built around your existing workflows.',
                'destination' => '/contact',
            ],
        ]);
    }
}
