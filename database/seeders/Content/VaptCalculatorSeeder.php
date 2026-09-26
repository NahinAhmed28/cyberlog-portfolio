<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptCalculatorSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_calculator', [
            [
                'paragraph' => 'Service Calculator',
                'heading' => 'Estimate Your',
                'label' => 'VAPT Scope',
                'paragraph_2' => 'VAPT effort depends on asset count, application complexity, user roles, testing depth, and environment type. Share your scope details to get an initial estimate from Cyberlog.',
                'label_2' => 'Web Applications',
                'label_3' => '0',
                'input_min' => 0,
                'input_max' => 20,
                'label_4' => 'APIs',
                'label_5' => '0',
                'input_min_2' => 0,
                'input_max_2' => 20,
                'label_6' => 'Mobile Applications',
                'label_7' => '0',
                'input_min_3' => 0,
                'input_max_3' => 20,
                'label_8' => 'Network Assets / IPs',
                'label_9' => '0',
                'input_min_4' => 0,
                'input_max_4' => 250,
                'label_10' => 'Testing approach',
                'button_data_mult' => 1,
                'button_label' => 'Black',
                'button_data_mult_2' => 1.25,
                'button_label_2' => 'Grey',
                'button_data_mult_3' => 1.55,
                'button_label_3' => 'White',
                'div_text' => 'BDT',
                'label_11' => '0',
                'div_text_2' => 'estimated cost',
                'label_12' => '0',
                'div_text_3' => 'analyst days',
                'link_url' => '/contact',
                'link_label' => 'Get This Quote',
                'day_rate' => 12000,
                'web_app_days' => 3.5,
                'api_days' => 2.2,
                'mobile_app_days' => 4.2,
                'ips_per_day' => 5,
                'breakdown_template' => '{apps} web apps + {apis} APIs + {mobile} mobile apps + {ips} IPs x {multiplier} approach multiplier',
                'initial_value' => 0,
                'initial_value_2' => 0,
                'initial_value_3' => 0,
                'initial_value_4' => 0,
            ],
        ]);
    }
}
