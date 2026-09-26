<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageOurTeamSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_our_team', [
            [
                'title' => 'Our Team — Cyberlog',
                'paragraph' => 'Leadership',
                'heading' => 'Meet the',
                'label' => 'Leadership',
                'icon' => 'fas fa-user',
                'paragraph_2' => 'Our Teams',
                'heading_2' => 'Built to',
                'label_2' => 'Attack, Defend & Innovate',
                'paragraph_3' => 'Our specialists work across offensive security, defensive operations, data intelligence, and AI automation to deliver complete cybersecurity solutions.',
            ],
        ]);
    }
}
