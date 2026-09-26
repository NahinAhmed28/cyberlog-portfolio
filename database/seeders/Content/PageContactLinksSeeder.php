<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageContactLinksSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_contact_links', [
            [
                'input_placeholder' => 'Your name *',
            ],
            [
                'input_placeholder' => 'Company',
            ],
        ]);
    }
}
