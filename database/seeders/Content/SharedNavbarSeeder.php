<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedNavbarSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_navbar', [
            [
                'link_url' => '/',
                'icon' => 'fas fa-shield-halved text-primary me-1',
                'link_label' => 'Cyber',
                'label' => 'log',
                'button_label' => 'Menu',
                'icon_2' => 'fas fa-bars',
                'link_url_2' => '/',
                'link_label_2' => 'Home',
                'a_href' => '#',
                'link_label_3' => 'Services',
                'link_label_4' => 'Prohoree 365',
                'link_label_5' => 'About Us',
                'icon_3' => 'fas fa-lock me-1',
                'link_label_6' => 'Client Login',
                'link_label_7' => 'Talk to an Expert',
                'destination' => '/vciso',
                'destination_2' => '/about',
                'destination_3' => '/contact',
            ],
        ]);
    }
}
