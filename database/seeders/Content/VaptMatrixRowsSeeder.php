<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptMatrixRowsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_matrix_rows', [
            [
                'item_0' => 'Testing Coverage',
                'item_1' => 'Limited asset testing',
                'item_2' => 'Web, API, mobile, network, cloud, and infrastructure testing',
            ],
            [
                'item_0' => 'Testing Method',
                'item_1' => 'Mostly automated scanning',
                'item_2' => 'Manual testing with automated validation',
            ],
            [
                'item_0' => 'Risk Validation',
                'item_1' => 'Lists vulnerabilities',
                'item_2' => 'Validates real exploitability and business impact',
            ],
            [
                'item_0' => 'Standards Alignment',
                'item_1' => 'Generic severity rating',
                'item_2' => 'CVSS, OWASP Top 10, and MITRE ATT&CK aligned',
            ],
            [
                'item_0' => 'Reporting',
                'item_1' => 'Technical findings only',
                'item_2' => 'Executive summary, technical details, proof of concept, and remediation',
            ],
            [
                'item_0' => 'Remediation Support',
                'item_1' => 'Limited guidance',
                'item_2' => 'Clear fix recommendations with priority',
            ],
            [
                'item_0' => 'Retesting',
                'item_1' => 'Not always included',
                'item_2' => 'Retesting support to confirm closure',
            ],
            [
                'item_0' => 'Outcome',
                'item_1' => 'Vulnerability list',
                'item_2' => 'Actionable risk reduction plan',
            ],
        ]);
    }
}
