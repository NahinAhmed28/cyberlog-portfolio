<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocReviewsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_reviews', [
            [
                'paragraph' => 'CLIENT FEEDBACK',
                'heading' => 'Our customers',
                'label' => 'say it best',
                'paragraph_2' => 'Cyberlog SOC helps organizations improve visibility, reduce alert noise, and respond to security incidents with confidence.',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'paragraph_3' => '“',
                'paragraph_4' => '”',
            ],
        ]);
    }
}
