<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocExpertLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_expert_links', [
            [
                'input_placeholder' => 'Your Name',
            ],
            [
                'input_placeholder' => 'Company Name',
            ],
        ]);
    }
}
