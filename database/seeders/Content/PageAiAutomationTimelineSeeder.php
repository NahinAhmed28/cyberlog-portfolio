<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageAiAutomationTimelineSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_ai_automation_timeline', [
            [
                'div_text' => '2015',
                'div_text_2' => 'Manual, paper-based processes and disconnected departments',
            ],
            [
                'div_text' => '2017',
                'div_text_2' => 'Early digitization of records and internal workflows',
            ],
            [
                'div_text' => '2019',
                'div_text_2' => 'Web and mobile platforms replace manual service delivery',
            ],
            [
                'div_text' => '2021',
                'div_text_2' => 'Integrated systems connect departments and data',
            ],
            [
                'div_text' => '2023',
                'div_text_2' => 'Automation reduces repetitive manual work',
            ],
            [
                'div_text' => '2025',
                'div_text_2' => 'AI-assisted tools support daily decision-making',
            ],
        ]);
    }
}
