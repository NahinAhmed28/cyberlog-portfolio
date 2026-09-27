<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class CapacityBuildingPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_capacity_building', [
            [
                'title' => 'Awareness & Security Training - Cyberlog',
                'paragraph' => 'Awareness & Security Training',
                'heading' => 'Awareness &',
                'label' => 'Security Training',
                'paragraph_2' => 'Strengthen your organization\'s human firewall with practical, role-based cybersecurity training built on real-world attack scenarios.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
                'source_media' => 'assets/img/services/Awareness & Security Training.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'paragraph_3' => 'WHY IT MATTERS',
                'heading_2' => 'WHY IT MATTERS',
                'paragraph_4' => 'Our Way of Conducting Training',
                'heading_3' => 'How We Train Your Team',
                'paragraph_5' => 'Get Started',
                'heading_4' => 'Get Your Staff Started With Training Today',
                'title_2' => 'Need a CISO without the full-time cost?',
                'text' => 'Get executive security leadership from day one.',
            ],
        ]);
        $this->seedFeature('page_capacity_building_item_items', [
            [
                'item_0' => 'fa-users',
                'item_1' => 'Human Risk',
                'item_2' => 'People remain the most targeted attack surface in any organization.',
            ],
            [
                'item_0' => 'fa-circle-exclamation',
                'item_1' => 'Costly Mistakes',
                'item_2' => 'A single untrained click can undo millions spent on technical defenses.',
            ],
            [
                'item_0' => 'fa-shield-halved',
                'item_1' => 'Active Defense',
                'item_2' => 'Awareness training turns employees into defenders, not liabilities.',
            ],
            [
                'item_0' => 'fa-repeat',
                'item_1' => 'Lasting Behavior',
                'item_2' => 'Practical, scenario-based learning builds habits that stick beyond the session.',
            ],
        ]);
        $this->seedFeature('page_capacity_building_w_items', [
            [
                'item_0' => 'fa-clipboard-list',
                'item_1' => 'Baseline',
                'item_2' => 'Phishing simulation and awareness assessment to establish your starting point.',
            ],
            [
                'item_0' => 'fa-chalkboard-user',
                'item_1' => 'Train',
                'item_2' => 'Role-based, bite-sized modules covering real-world threats and best practices.',
            ],
            [
                'item_0' => 'fa-fish',
                'item_1' => 'Simulate',
                'item_2' => 'Ongoing phishing exercises that reinforce learning in real-world context.',
            ],
            [
                'item_0' => 'fa-chart-simple',
                'item_1' => 'Track',
                'item_2' => 'Post-training metrics that prove awareness is improving over time.',
            ],
        ]);
        $this->seedFeature('page_capacity_building_links', [
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Department-specific training tracks and reporting',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Dedicated program coordinator',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Custom phishing simulation campaigns',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Multiple admin access',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Designed to support large organizations',
            ],
        ]);
        $this->seedFeature('page_capacity_building_links_2', [
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Simple, fast setup',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Pre-configured training curriculum',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Full access to the training module library',
            ],
            [
                'icon' => 'fas fa-check text-teal me-2',
                'list_text' => 'Designed with small teams in mind',
            ],
        ]);
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
