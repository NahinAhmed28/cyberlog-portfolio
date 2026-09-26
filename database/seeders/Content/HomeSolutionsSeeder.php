<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeSolutionsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_solutions', [
            [
                'group_routes' => [
                    'offensive' => 'offensive-security-services',
                    'defensive' => 'defensive-security-services',
                ],
                'paragraph' => 'Security Solutions',
                'heading' => 'Explore Our',
                'label' => 'Security Solutions',
                'label_2' => 'Learn More',
                'icon' => 'fas fa-arrow-right',
            ],
        ]);
    }
}
