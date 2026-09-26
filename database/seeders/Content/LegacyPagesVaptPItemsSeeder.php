<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class LegacyPagesVaptPItemsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('legacy_pages_vapt_p_items', [
            [
                'item_0' => 'fa-binoculars',
                'item_1' => 'Reconnaissance',
                'item_2' => 'Map the attack surface and gather intelligence on exposed assets.',
            ],
            [
                'item_0' => 'fa-radar',
                'item_1' => 'Scanning &amp; Enumeration',
                'item_2' => 'Identify open services, versions, and potential entry points.',
            ],
            [
                'item_0' => 'fa-bug',
                'item_1' => 'Exploitation',
                'item_2' => 'Safely validate which vulnerabilities are actually exploitable.',
            ],
            [
                'item_0' => 'fa-arrows-up-to-line',
                'item_1' => 'Privilege Escalation',
                'item_2' => 'Test lateral movement and depth of potential compromise.',
            ],
            [
                'item_0' => 'fa-file-shield',
                'item_1' => 'Reporting',
                'item_2' => 'Risk-rated findings with prioritized remediation guidance.',
            ],
            [
                'item_0' => 'fa-rotate',
                'item_1' => 'Re-testing',
                'item_2' => 'Verify that fixes hold and the risk is genuinely closed.',
            ],
        ]);
    }
}
