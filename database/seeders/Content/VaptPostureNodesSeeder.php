<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class VaptPostureNodesSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('vapt_posture_nodes', [
            [
                'side' => 'left',
                'slot' => '1',
                'icon' => 'fa-window-maximize',
                'label' => 'Web Application Testing',
                'color' => '#8f4dff',
                'rgb' => '143, 77, 255',
            ],
            [
                'side' => 'left',
                'slot' => '2',
                'icon' => 'fa-plug',
                'label' => 'API Security Testing',
                'color' => '#a051ff',
                'rgb' => '160, 81, 255',
            ],
            [
                'side' => 'left',
                'slot' => '3',
                'icon' => 'fa-mobile-screen-button',
                'label' => 'Mobile Application Testing',
                'color' => '#7d3cff',
                'rgb' => '125, 60, 255',
            ],
            [
                'side' => 'left',
                'slot' => '4',
                'icon' => 'fa-network-wired',
                'label' => 'Network Penetration Testing',
                'color' => '#9c5cff',
                'rgb' => '156, 92, 255',
            ],
            [
                'side' => 'right',
                'slot' => '1',
                'icon' => 'fa-cloud',
                'label' => 'Cloud Security Testing',
                'color' => '#ff4f68',
                'rgb' => '255, 79, 104',
            ],
            [
                'side' => 'right',
                'slot' => '2',
                'icon' => 'fa-sliders',
                'label' => 'Configuration Review',
                'color' => '#ff6b78',
                'rgb' => '255, 107, 120',
            ],
            [
                'side' => 'right',
                'slot' => '3',
                'icon' => 'fa-bug',
                'label' => 'Vulnerability Validation',
                'color' => '#ff475f',
                'rgb' => '255, 71, 95',
            ],
            [
                'side' => 'right',
                'slot' => '4',
                'icon' => 'fa-rotate',
                'label' => 'Remediation Retesting',
                'color' => '#ff7a4e',
                'rgb' => '255, 122, 78',
            ],
        ]);
    }
}
