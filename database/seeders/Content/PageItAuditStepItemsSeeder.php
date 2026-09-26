<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageItAuditStepItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
