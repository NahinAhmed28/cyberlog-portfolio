<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class AiAutomationPageSeeder extends ContentSeeder
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
        $this->seedFeature('page_ai_automation_cards', [
            [
                'img_media' => 'images/clients/gono-projatontri-bangladesh-sarkar.png',
                'heading' => 'Smart City Chuadanga',
                'div_aria_label' => '5.0 out of 5 stars',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'label' => '5.0',
                'paragraph' => '“Cyberlog helped us digitize and automate our city service workflows. What once took days now happens in real time, giving our team a single platform to manage everything.”',
            ],
            [
                'img_media' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
                'heading' => 'Bangladesh Petroleum Institute',
                'div_aria_label' => '5.0 out of 5 stars',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'label' => '5.0',
                'paragraph' => '“Cyberlog automated our reporting and internal processes, improving visibility across operations while significantly reducing repetitive manual work.”',
            ],
        ]);
        $this->seedFeature('page_ai_automation_cards_2', [
            [
                'icon' => 'fas fa-bolt',
                'h5_text' => 'Faster Service Delivery',
                'paragraph' => 'Automated workflows dramatically reduce processing time by replacing slow manual tasks with intelligent, instant execution.',
            ],
            [
                'icon' => 'fas fa-sitemap',
                'h5_text' => 'Centralized Management',
                'paragraph' => 'Connect departments, services, and locations through one unified platform instead of disconnected systems.',
            ],
            [
                'icon' => 'fas fa-check-circle',
                'h5_text' => 'Reduced Manual Errors',
                'paragraph' => 'Automation eliminates repetitive data entry and minimizes costly human errors throughout daily operations.',
            ],
            [
                'icon' => 'fas fa-chart-line',
                'h5_text' => 'Real-Time Monitoring',
                'paragraph' => 'Live dashboards provide instant visibility into operations, helping leaders make faster, data-driven decisions.',
            ],
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'h5_text' => 'Scalable Smart Systems',
                'paragraph' => 'Grow from a single department to enterprise-wide deployment without rebuilding your digital infrastructure.',
            ],
            [
                'icon' => 'fas fa-coins',
                'h5_text' => 'Cost & Resource Efficiency',
                'paragraph' => 'Reduce operational costs while allowing teams to focus on strategic, high-value work instead of repetitive tasks.',
            ],
        ]);
        $this->seedFeature('page_ai_automation_timeline', [
            [
                'div_text' => '2015',
                'div_text_2' => 'Manual, paper-based processes and disconnected departments',
            ],
            [
                'div_text' => '2017',
                'div_text_2' => 'Early digitization of records and internal workflows',
            ],
            [
                'div_text' => '2019',
                'div_text_2' => 'Web and mobile platforms replace manual service delivery',
            ],
            [
                'div_text' => '2021',
                'div_text_2' => 'Integrated systems connect departments and data',
            ],
            [
                'div_text' => '2023',
                'div_text_2' => 'Automation reduces repetitive manual work',
            ],
            [
                'div_text' => '2025',
                'div_text_2' => 'AI-assisted tools support daily decision-making',
            ],
        ]);
    }
}
