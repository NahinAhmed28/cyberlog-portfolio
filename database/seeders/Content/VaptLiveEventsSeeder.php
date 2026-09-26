<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptLiveEventsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_live_events', [
            [
                'item_0' => 'DISCOVERED',
                'item_1' => 'exposed admin endpoint identified',
            ],
            [
                'item_0' => 'TESTING',
                'item_1' => 'authentication flow under analysis',
            ],
            [
                'item_0' => 'VALIDATED',
                'item_1' => 'broken access control impact confirmed',
            ],
            [
                'item_0' => 'MAPPED',
                'item_1' => 'finding mapped to OWASP Top 10',
            ],
            [
                'item_0' => 'BLOCKED',
                'item_1' => 'rate limit engaged during safe test',
            ],
            [
                'item_0' => 'CAPTURED',
                'item_1' => 'evidence package securely recorded',
            ],
            [
                'item_0' => 'RETESTED',
                'item_1' => 'remediation successfully verified',
            ],
            [
                'item_0' => 'QUEUED',
                'item_1' => 'business-logic test case scheduled',
            ],
        ]);
    }
}
