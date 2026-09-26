<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocCalculatorSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_calculator', [
            [
                'paragraph' => 'SOC as a Service',
                'heading' => 'Estimate Your',
                'label' => 'SOC Cost',
                'paragraph_2' => 'Managed SOC pricing scales with your environment — endpoints, log volume, and coverage level. Move the sliders for an indicative monthly figure, then request a tailored quote for your exact scope.',
                'label_2' => 'Endpoints / devices',
                'label_3' => '1',
                'input_min' => 1,
                'input_max' => 1000,
                'input_step' => 1,
                'label_4' => 'Log volume',
                'small_text' => '(GB / day)',
                'label_5' => '1',
                'input_min_2' => 1,
                'input_max_2' => 1000,
                'input_step_2' => 1,
                'label_6' => 'Coverage',
                'button_data_mult' => 1,
                'button_label' => '24 / 7',
                'button_data_mult_2' => 0.62,
                'button_label_2' => 'Business hours',
                'div_text' => '$',
                'label_7' => '0',
                'small_text_2' => '/mo',
                'link_label' => 'Get a Tailored Quote',
                'base_cost' => 1500,
                'per_endpoint' => 4,
                'per_gb' => 35,
                'rounding_increment' => 50,
                'destination' => '/contact',
                'initial_value' => 1,
                'initial_value_2' => 1,
            ],
        ]);
    }
}
