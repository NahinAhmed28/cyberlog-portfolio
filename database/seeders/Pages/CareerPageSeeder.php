<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class CareerPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_career', [
            [
                'title' => 'Career — Cyberlog',
                'eyebrow' => 'Careers',
                'heading' => 'Build a Career in <span class="text-teal">Cyber Defense</span>',
                'subheading' => 'Join a team that defends the organizations that matter most. We are always looking for talented people who want to make a real impact in cybersecurity.',
                'label' => 'View Open Roles',
                'url' => '#openings',
                'hero_icon' => 'fa-solid fa-circle-play',
                'hero_caption' => 'Play Video',
                'paragraph' => 'Our Values',
                'heading_2' => 'Our Values',
                'paragraph_2' => 'Why Cyberlog',
                'heading_3' => 'Love From Here, Work That Matters',
                'paragraph_3' => 'Open Roles',
                'heading_4' => 'Current Openings',
                'icon' => 'fas fa-location-dot text-teal me-1',
                'link_url' => '/contact',
                'link_label' => 'Apply',
                'paragraph_4' => 'Don\'t see a role that fits?',
                'link_url_2' => '/contact',
                'link_label_2' => 'Send us your CV',
            ],
        ]);
        $this->seedFeature('page_career_w_items', [
            [
                'item_0' => 'fa-solid fa-magnifying-glass',
                'item_1' => 'Transparency',
                'item_2' => '',
            ],
            [
                'item_0' => 'fa-solid fa-bullseye',
                'item_1' => 'Precision',
                'item_2' => '',
            ],
            [
                'item_0' => 'fa-solid fa-ribbon',
                'item_1' => 'Excellence',
                'item_2' => '',
            ],
        ]);
        $this->seedFeature('page_career_w_items_2', [
            [
                'item_0' => 'fa-graduation-cap',
                'item_1' => 'Continuous learning',
                'item_2' => 'Certifications, labs, and mentorship to keep your skills sharp.',
            ],
            [
                'item_0' => 'fa-people-group',
                'item_1' => 'Real impact',
                'item_2' => 'Defend national infrastructure, finance, and government organizations.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Balance &amp; growth',
                'item_2' => 'A supportive culture with room to grow into leadership.',
            ],
        ]);
        $this->seedFeature('page_career_job_items', [
            [
                'item_0' => 'SOC Analyst (L1/L2)',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Security Operations',
            ],
            [
                'item_0' => 'Penetration Tester',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Offensive Security',
            ],
            [
                'item_0' => 'GRC / ISO 27001 Consultant',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Compliance',
            ],
            [
                'item_0' => 'Incident Response Engineer',
                'item_1' => 'Dhaka · Full-time',
                'item_2' => 'Defense Services',
            ],
            [
                'item_0' => 'Security Awareness Trainer',
                'item_1' => 'Dhaka · Contract',
                'item_2' => 'Capacity Building',
            ],
        ]);
    }
}
