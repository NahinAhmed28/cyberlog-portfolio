<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class SocSensorSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('soc_sensor', [
            [
                'paragraph' => 'New System Sensor',
                'heading' => 'Continuous Telemetry, Everywhere',
                'paragraph_2' => 'Cyberlog deploys sensors across your environment so nothing happens off-camera — feeding one correlated view of risk.',
            ],
        ]);
    }
}
