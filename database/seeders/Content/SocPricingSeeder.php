<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocPricingSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_pricing', [
            [
                'paragraph' => 'Pricing',
                'heading' => 'Custom SOC Plans',
                'label' => 'Most Popular',
                'div_text' => 'Custom',
                'icon' => 'fas fa-circle-check text-primary me-2',
                'link_label' => 'Get a Quote',
                'destination' => '/contact',
            ],
        ]);
    }
}
