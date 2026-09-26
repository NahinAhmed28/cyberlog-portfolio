<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageServicesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_services', [
            [
                'group_routes' => [
                    'offensive' => 'offensive-security-services',
                    'defensive' => 'defensive-security-services',
                ],
                'title' => 'Services — Cyberlog',
                'paragraph' => 'Security Solutions',
                'heading' => 'Explore Our',
                'label' => 'Security Solutions',
                'label_2' => 'Learn More',
                'icon' => 'fas fa-arrow-right ms-1',
            ],
        ]);
    }
}
