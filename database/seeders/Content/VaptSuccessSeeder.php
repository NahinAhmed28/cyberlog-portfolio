<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptSuccessSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_success', [
            [
                'paragraph' => 'System Success Story',
                'heading' => 'Bangladesh Finance Strengthened Its Digital Risk Visibility',
                'paragraph_2' => 'Cyberlog conducted VAPT for Bangladesh Finance to identify, validate, and prioritize exploitable risks across its digital environment. The engagement gave technical teams a clear remediation path and leadership a practical view of risk.',
                'link_url' => '/contact',
                'link_label' => 'Discuss a Similar Assessment',
                'label' => 'Financial Institute',
                'label_2' => 'VAPT Engagement',
                'b_text' => 'Scope',
                'b_text_2' => 'Validate',
                'b_text_3' => 'Prioritize',
                'b_text_4' => 'Retest',
            ],
        ]);
    }
}
