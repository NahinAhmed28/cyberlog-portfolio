<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedReviewsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_reviews', [
            [
                'paragraph' => 'CLIENT FEEDBACK',
                'heading' => 'Our customers',
                'label' => 'say it best',
                'paragraph_2' => 'Recognized by clients for practical security delivery, clear reporting, and measurable improvements.',
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
