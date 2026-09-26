<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageCareerSeeder extends ContentSeeder
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
    }
}
