<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageServiceDetailSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_service_detail', [
            [
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
                'paragraph' => 'What We Deliver',
                'heading' => 'Dedicated',
                'heading_2' => 'Support',
                'icon' => 'fas fa-circle-check',
                'title' => 'Need help with',
                'text' => 'Cyberlog can scope a practical plan for your environment and risk profile.',
                'page_title_suffix' => '- Cyberlog',
            ],
        ]);
    }
}
