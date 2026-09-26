<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedPageHeroSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_page_hero', [
            [
                'icon' => 'fas fa-shield-halved',
                'default_text' => 'Talk to an Expert',
                'default_text_2' => 'Enterprise-grade cyber defense',
                'default_hero_icon' => 'fas fa-shield-halved',
            ],
        ]);
    }
}
