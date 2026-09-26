<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageItAuditLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
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
