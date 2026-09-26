<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptHeroVaptLogsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_hero_vapt_logs', [
            [
                'label' => '[VALIDATED]',
                'paragraph' => 'SQL injection impact confirmed',
            ],
            [
                'label' => '[MAPPED]',
                'paragraph' => 'OWASP access control weakness',
            ],
            [
                'label' => '[QUEUED]',
                'paragraph' => 'remediation evidence review',
            ],
        ]);
    }
}
