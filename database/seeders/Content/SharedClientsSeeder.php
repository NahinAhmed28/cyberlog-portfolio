<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedClientsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_clients', [
            [
                'paragraph' => 'We\'re Working With',
                'heading' => 'Our',
                'label' => 'Clients',
                'button_aria_label' => 'Previous client',
                'icon' => 'fas fa-chevron-left',
                'button_aria_label_2' => 'Next client',
                'icon_2' => 'fas fa-chevron-right',
                'dot_aria_label' => 'Show',
            ],
        ]);
    }
}
