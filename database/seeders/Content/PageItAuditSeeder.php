<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageItAuditSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_it_audit', [
            [
                'title' => 'IT Security Audit & ISO/IEC 27001 — Cyberlog',
                'paragraph' => 'IT Security Audit & ISO/IEC 27001',
                'heading' => 'Strengthen Security Controls and',
                'label' => 'Prepare for Compliance',
                'paragraph_2' => 'Cyberlog helps organizations review IT systems, identify security gaps, improve governance, and prepare for ISO/IEC 27001 implementation and audit readiness.',
                'link_url' => '/contact',
                'link_label' => 'Talk to an Expert',
                'source_media' => 'assets/img/services/iso27001.mp4',
                'video_text' => 'Your browser does not support the video tag.',
                'paragraph_3' => 'Importance',
                'heading_2' => 'Why Your Organization Needs ISO 27001',
                'paragraph_4' => 'Our Approach',
                'heading_3' => 'The ISO 27001 Readiness Journey',
                'title_2' => 'Pursuing ISO 27001?',
                'text' => 'Let\'s map your fastest path to certification.',
            ],
        ]);
    }
}
