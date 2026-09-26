<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class ClientsClientStripSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('clients_client_strip', [
            [
                'paragraph' => 'Clients',
            ],
        ]);
    }
}
