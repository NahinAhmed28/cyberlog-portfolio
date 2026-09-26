<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class TrainingPackagesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('training_packages', [
            [
                'title' => 'Small Teams',
                'description' => '5-50 employees',
                'features' => [
                    'Simple, fast setup',
                    'Pre-configured training curriculum',
                    'Full access to the training module library',
                    'Designed with small teams in mind',
                ],
                'button_label' => 'Get Started',
                'button_url' => '/contact',
                'button_white_text' => false,
            ],
            [
                'title' => 'Enterprise',
                'description' => '50+ employees',
                'features' => [
                    'Department-specific training tracks and reporting',
                    'Dedicated program coordinator',
                    'Custom phishing simulation campaigns',
                    'Multiple admin access',
                    'Designed to support large organizations',
                ],
                'button_label' => 'Get Started',
                'button_url' => '/contact',
                'button_white_text' => true,
            ],
        ]);
    }
}
