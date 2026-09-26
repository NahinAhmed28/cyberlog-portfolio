<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocComparisonRowsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_comparison_rows', [
            [
                'model' => 'In-House SOC',
                'cost' => '$750,000',
                'setup' => '9 months',
                'mttr' => '4.5',
                'stopped' => '75%',
                'sla' => '70%',
                'hl' => false,
            ],
            [
                'model' => 'Hybrid SOC (Co-Managed)',
                'cost' => '$400,000',
                'setup' => '5 months',
                'mttr' => '2.5',
                'stopped' => '85%',
                'sla' => '85%',
                'hl' => false,
            ],
            [
                'model' => 'Fully Outsourced SOC',
                'cost' => '$280,000',
                'setup' => '2 months',
                'mttr' => '1.0',
                'stopped' => '90%',
                'sla' => '88%',
                'hl' => false,
            ],
            [
                'model' => 'UnderDefense SOCaaS',
                'cost' => '$192,000',
                'setup' => '1 month',
                'mttr' => '0.5',
                'stopped' => '96%',
                'sla' => '99.9%',
                'hl' => false,
            ],
            [
                'model' => 'Cyberlog SOC',
                'cost' => '$150,000',
                'setup' => '2 weeks',
                'mttr' => '0.4',
                'stopped' => '97%',
                'sla' => '99.95%',
                'hl' => true,
            ],
        ]);
    }
}
