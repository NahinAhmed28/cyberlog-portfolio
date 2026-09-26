<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCapacityBuildingSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building', [
            [
                'title' => 'Awareness & Security Training - Cyberlog',
                'paragraph' => 'Awareness & Security Training',
                'heading' => 'Awareness &',
                'label' => 'Security Training',
                'paragraph_2' => 'Strengthen your organization\'s human firewall with practical, role-based cybersecurity training built on real-world attack scenarios.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
                'source_media' => 'assets/img/services/Awareness & Security Training.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'paragraph_3' => 'WHY IT MATTERS',
                'heading_2' => 'WHY IT MATTERS',
                'paragraph_4' => 'Our Way of Conducting Training',
                'heading_3' => 'How We Train Your Team',
                'paragraph_5' => 'Get Started',
                'heading_4' => 'Get Your Staff Started With Training Today',
                'title_2' => 'Need a CISO without the full-time cost?',
                'text' => 'Get executive security leadership from day one.',
            ],
        ]);
    }
}
