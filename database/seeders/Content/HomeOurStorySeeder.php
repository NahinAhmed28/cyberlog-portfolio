<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeOurStorySeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_our_story', [
            [
                'paragraph' => 'Our Story',
                'heading' => 'The Story of',
                'label' => 'Our Growth',
            ],
        ]);
    }
}
