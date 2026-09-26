<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class TeamUnitsSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('team_units', [
            [
                'title' => 'Offensive Team',
                'subtitle' => 'Red Team',
                'icon' => 'fas fa-crosshairs',
                'color' => 'red',
                'points' => [
                    'Penetration Testing',
                    'White & Gray Box Testing',
                    'API & Mobile Testing',
                    'Social Engineering',
                    'Ethical Hacking',
                    'Vulnerability Exploitation',
                ],
            ],
            [
                'title' => 'Data Management Team',
                'subtitle' => 'Purple Team',
                'icon' => 'fas fa-database',
                'color' => 'purple',
                'points' => [
                    'Data Analysis',
                    'Gap Analysis',
                    'Security Assessment',
                    'Managed Security',
                    'System Improvement',
                ],
            ],
            [
                'title' => 'Defensive Team',
                'subtitle' => 'Blue Team',
                'icon' => 'fas fa-shield-halved',
                'color' => 'blue',
                'points' => [
                    'SOC Support',
                    'Incident Response',
                    'Threat Hunting',
                    'Digital Forensics',
                    'Firewall Protection',
                    'SIEM Solutions',
                ],
            ],
            [
                'title' => 'AI & Automation Team',
                'subtitle' => 'Innovation Unit',
                'icon' => 'fas fa-robot',
                'color' => 'innovation',
                'points' => [
                    'AI Threat Detection',
                    'Automated Scanning',
                    'Security Orchestration',
                    'Alert Intelligence',
                    'Predictive Risk Analysis',
                    'Custom Security Tools',
                ],
            ],
        ]);
    }
}
