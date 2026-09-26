<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SharedSecurityServiceGroupSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('shared_security_service_group', [
            [
                'icon' => 'fas fa-circle-plus',
            ],
        ]);
    }
}
