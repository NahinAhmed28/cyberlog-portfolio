<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeOurStoryStoryStatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_our_story_story_stats', [
            [
                'label' => '21+',
                'label_2' => 'Enterprise And Government Clients',
            ],
            [
                'label' => '24/7',
                'label_2' => 'Security Operations Coverage',
            ],
            [
                'label' => '5000+',
                'label_2' => 'Users Protected Across Services',
            ],
        ]);
    }
}
