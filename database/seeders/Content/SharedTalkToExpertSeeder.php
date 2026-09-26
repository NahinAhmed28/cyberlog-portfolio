<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedTalkToExpertSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_talk_to_expert', [
            [
                'default_text' => 'Still evaluating your security options?',
                'default_text_2' => 'We\'ll walk you through the pros, cons, and pricing.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
            ],
        ]);
    }
}
