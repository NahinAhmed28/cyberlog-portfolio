<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VcisoProductSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vciso_product', [
            [
                'paragraph' => 'Prohoree 365',
                'heading' => 'Prohoree 365 Components',
                'icon' => 'fas fa-plus cl-vm-plus',
                'icon_2' => 'fas fa-circle-check',
            ],
        ]);
    }
}
