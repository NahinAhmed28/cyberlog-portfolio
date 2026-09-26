<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageItAuditVItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
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
    }
}
