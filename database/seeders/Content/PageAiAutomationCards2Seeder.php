<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageAiAutomationCards2Seeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_ai_automation_cards_2', [
            [
                'icon' => 'fas fa-bolt',
                'h5_text' => 'Faster Service Delivery',
                'paragraph' => 'Automated workflows dramatically reduce processing time by replacing slow manual tasks with intelligent, instant execution.',
            ],
            [
                'icon' => 'fas fa-sitemap',
                'h5_text' => 'Centralized Management',
                'paragraph' => 'Connect departments, services, and locations through one unified platform instead of disconnected systems.',
            ],
            [
                'icon' => 'fas fa-check-circle',
                'h5_text' => 'Reduced Manual Errors',
                'paragraph' => 'Automation eliminates repetitive data entry and minimizes costly human errors throughout daily operations.',
            ],
            [
                'icon' => 'fas fa-chart-line',
                'h5_text' => 'Real-Time Monitoring',
                'paragraph' => 'Live dashboards provide instant visibility into operations, helping leaders make faster, data-driven decisions.',
            ],
            [
                'icon' => 'fas fa-expand-arrows-alt',
                'h5_text' => 'Scalable Smart Systems',
                'paragraph' => 'Grow from a single department to enterprise-wide deployment without rebuilding your digital infrastructure.',
            ],
            [
                'icon' => 'fas fa-coins',
                'h5_text' => 'Cost & Resource Efficiency',
                'paragraph' => 'Reduce operational costs while allowing teams to focus on strategic, high-value work instead of repetitive tasks.',
            ],
        ]);
    }
}
