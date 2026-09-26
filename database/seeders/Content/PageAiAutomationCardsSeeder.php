<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageAiAutomationCardsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_ai_automation_cards', [
            [
                'img_media' => 'images/clients/gono-projatontri-bangladesh-sarkar.png',
                'heading' => 'Smart City Chuadanga',
                'div_aria_label' => '5.0 out of 5 stars',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'label' => '5.0',
                'paragraph' => '“Cyberlog helped us digitize and automate our city service workflows. What once took days now happens in real time, giving our team a single platform to manage everything.”',
            ],
            [
                'img_media' => 'images/clients/bangladesh-petroleum-institute-bpi.png',
                'heading' => 'Bangladesh Petroleum Institute',
                'div_aria_label' => '5.0 out of 5 stars',
                'icon' => 'fas fa-star',
                'icon_2' => 'fas fa-star',
                'icon_3' => 'fas fa-star',
                'icon_4' => 'fas fa-star',
                'icon_5' => 'fas fa-star',
                'label' => '5.0',
                'paragraph' => '“Cyberlog automated our reporting and internal processes, improving visibility across operations while significantly reducing repetitive manual work.”',
            ],
        ]);
    }
}
