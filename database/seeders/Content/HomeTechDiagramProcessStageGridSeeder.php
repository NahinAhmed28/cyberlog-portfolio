<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeTechDiagramProcessStageGridSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_tech_diagram_process_stage_grid', [
            [
                'div_text' => 'Step 01',
                'heading' => 'Understanding Business & Risks',
                'icon' => 'fas fa-bullseye',
                'paragraph' => 'Scope & Goals',
            ],
            [
                'div_text' => 'Step 02',
                'heading' => 'Security Assessment & Discovery',
                'icon' => 'fas fa-crosshairs',
                'paragraph' => 'Assets & Exposure',
            ],
            [
                'div_text' => 'Step 03',
                'heading' => 'Vulnerability Testing',
                'icon' => 'fas fa-bug',
                'paragraph' => 'VAPT / App Security',
            ],
            [
                'div_text' => 'Step 04',
                'heading' => 'Protection & Implementation',
                'icon' => 'fas fa-shield-halved',
                'paragraph' => 'SOC / Hardening',
            ],
            [
                'div_text' => 'Step 05',
                'heading' => 'Monitoring & Threat Detection',
                'icon' => 'fas fa-satellite-dish',
                'paragraph' => 'Detect & Respond',
            ],
            [
                'div_text' => 'Step 06',
                'heading' => 'Reporting & Continuous Improvement',
                'icon' => 'fas fa-arrow-trend-up',
                'paragraph' => 'Remediation & Compliance',
            ],
        ]);
    }
}
