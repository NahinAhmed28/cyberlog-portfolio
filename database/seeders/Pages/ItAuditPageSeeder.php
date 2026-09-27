<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class ItAuditPageSeeder extends ContentSeeder
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
        $this->seedFeature('page_it_audit_v_items', [
            [
                'item_0' => 'fa-lock',
                'item_1' => 'Protect Sensitive Information',
                'item_2' => 'ISO 27001 helps organizations manage information security risks and protect customer, business, and operational data.',
            ],
            [
                'item_0' => 'fa-handshake-angle',
                'item_1' => 'Build Customer Confidence',
                'item_2' => 'A structured ISMS shows clients, partners, and stakeholders that your organization takes security seriously.',
            ],
            [
                'item_0' => 'fa-scale-balanced',
                'item_1' => 'Meet Compliance Requirements',
                'item_2' => 'ISO 27001 supports audit readiness, regulatory alignment, and stronger governance across security processes.',
            ],
            [
                'item_0' => 'fa-magnifying-glass-chart',
                'item_1' => 'Reduce Security Gaps',
                'item_2' => 'It helps identify weak controls, unclear responsibilities, and process gaps before they become serious risks.',
            ],
            [
                'item_0' => 'fa-list-check',
                'item_1' => 'Improve Internal Discipline',
                'item_2' => 'Policies, procedures, risk registers, and control ownership make security easier to manage across teams.',
            ],
            [
                'item_0' => 'fa-certificate',
                'item_1' => 'Prepare for Certification',
                'item_2' => 'A proper implementation roadmap helps your organization move confidently toward ISO 27001 certification.',
            ],
        ]);
        $this->seedFeature('page_it_audit_step_items', [
            [
                'item_0' => 'Gap Assessment',
                'item_1' => 'Review current security controls, policies, processes, and documentation against ISO/IEC 27001 requirements.',
            ],
            [
                'item_0' => 'ISMS Scope &amp; Planning',
                'item_1' => 'Define the ISMS scope, business context, assets, responsibilities, and implementation roadmap.',
            ],
            [
                'item_0' => 'Risk Assessment &amp; Treatment',
                'item_1' => 'Identify information security risks, evaluate impact, and prepare a practical risk treatment plan.',
            ],
            [
                'item_0' => 'Policy &amp; Control Implementation',
                'item_1' => 'Develop required policies, procedures, control documents, and supporting evidence for ISMS readiness.',
            ],
            [
                'item_0' => 'Internal Audit &amp; Management Review',
                'item_1' => 'Check ISMS effectiveness through internal audit, evidence review, and management-level evaluation.',
            ],
            [
                'item_0' => 'Certification Audit Support',
                'item_1' => 'Prepare your team for external audit stages with required documents, records, and control evidence.',
            ],
            [
                'item_0' => 'Continuous Improvement',
                'item_1' => 'Maintain audit readiness through monitoring, corrective actions, and regular ISMS improvement.',
            ],
        ]);
        $this->seedFeature('page_it_audit_links', [
            [
                'div_text' => '93',
                'div_text_2' => 'Annex A Controls Reviewed',
            ],
            [
                'div_text' => 'ISMS',
                'div_text_2' => 'Prepared for Certification Readiness',
            ],
        ]);
    }
}
