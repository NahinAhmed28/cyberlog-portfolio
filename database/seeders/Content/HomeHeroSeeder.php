<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeHeroSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_hero', [
            [
                'heading' => 'Smarter Intelligence.',
                'label' => 'Stronger Security.',
                'paragraph' => 'Join our',
                'label_2' => 'Cyber Defense eco-system',
                'paragraph_2' => 'with',
                'label_3' => 'hundreds',
                'paragraph_3' => 'of other organizations!',
            ],
        ]);
    }
}
