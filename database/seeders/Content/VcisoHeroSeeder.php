<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VcisoHeroSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vciso_hero', [
            [
                'heading' => 'Bangladesh\'s First Unified Cybersecurity Solution:',
                'label' => 'Prohoree 365',
                'source_media' => 'assets/video/Vciso_Dashboard.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'div_aria_label' => 'vCISO service coverage diagram',
                'div_aria_label_2' => 'Prohoree 365 core',
                'label_2' => 'Prohoree',
                'label_3' => '365',
            ],
        ]);
    }
}
