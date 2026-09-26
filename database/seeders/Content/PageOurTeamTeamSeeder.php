<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageOurTeamTeamSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_our_team_team', [
            [
                'name' => 'Nazim Farhan Choudhury',
                'role' => 'Chairman',
                'photo' => 'assets/img/team/nazim-farhan-choudhury.png',
                'width' => 1254,
                'height' => 1254,
                'bio' => 'Guides Cyberlog leadership vision, governance, and long-term organizational growth.',
                'social' => [
                    'facebook' => 'https://www.facebook.com/nazimfarhanc',
                    'linkedin' => 'https://www.linkedin.com/in/nazim-farhan-choudhury-661786/',
                ],
            ],
            [
                'name' => 'Hridoy Mustofa',
                'role' => 'Managing Director',
                'photo' => 'assets/img/team/hridoy-mustofa.jpeg',
                'width' => 953,
                'height' => 960,
                'bio' => 'Leads Cyberlog technology direction, cyber defense delivery, and security innovation.',
                'social' => [
                    'facebook' => 'https://www.facebook.com/hridoy.mustofa',
                    'linkedin' => 'https://www.linkedin.com/in/hridoymustofa/',
                ],
            ],
        ]);
    }
}
