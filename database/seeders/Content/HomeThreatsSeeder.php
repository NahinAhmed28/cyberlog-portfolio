<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeThreatsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_threats', [
            [
                'paragraph' => 'Threat Intelligence',
                'heading' => 'Stay ahead of emerging threats',
                'label_3' => 'with continuous risk signals',
                'paragraph_2' => 'Stay on top of the latest emerging threats, their blast radius, available patches, and the exact steps to take if one of your systems has been breached.',
                'icon_3' => 'fas fa-triangle-exclamation',
                'div_text' => 'Emerging threat',
                'heading_2' => 'React2Shell',
                'paragraph_3' => 'A critical vulnerability has been identified in the JavaScript library React.',
                'icon_4' => 'fas fa-magnifying-glass',
                'label_4' => '12 investigating',
                'icon_5' => 'fas fa-screwdriver-wrench',
                'label_5' => '4 remediating',
                'icon_6' => 'fas fa-circle-check',
                'label_6' => '5 resolved',
                'icon_7' => 'fas fa-shield-halved',
                'label_7' => '6 unaffected',
            ],
        ]);
    }
}
