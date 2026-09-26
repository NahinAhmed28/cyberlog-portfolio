<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeTechDiagramSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_tech_diagram', [
            [
                'paragraph' => 'HOW WE WORK',
                'label' => 'OUR ENGAGEMENT',
                'label_2' => 'PROCESS',
                'paragraph_2' => 'A structured, repeatable methodology that takes you from risk discovery to continuous protection.',
                'icon' => 'fas fa-shield-alt',
                'label_3' => 'Cyberlog',
                'label_4' => 'Security Ops',
            ],
        ]);
    }
}
