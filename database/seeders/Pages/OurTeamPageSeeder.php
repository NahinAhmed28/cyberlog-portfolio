<?php

namespace Database\Seeders\Pages;

use Database\Seeders\ContentSeeder;

class OurTeamPageSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_our_team', [
            [
                'title' => 'Our Team — Cyberlog',
                'paragraph' => 'Leadership',
                'heading' => 'Meet the',
                'label' => 'Leadership',
                'icon' => 'fas fa-user',
                'paragraph_2' => 'Our Teams',
                'heading_2' => 'Built to',
                'label_2' => 'Attack, Defend & Innovate',
                'paragraph_3' => 'Our specialists work across offensive security, defensive operations, data intelligence, and AI automation to deliver complete cybersecurity solutions.',
            ],
        ]);
        $this->seedFeature('page_our_team_team', [
            [
                'name' => 'Nazim Farhan Choudhury',
                'role' => 'Chairman',
                'photo' => 'assets/img/team/nazim-farhan-choudhury.png',
                'width' => 1254,
                'height' => 1254,
                'bio' => 'Guides Cyberlog leadership vision, governance, and long-term organizational growth.',
                'social' => [
                    'facebook' => 'https://www.facebook.com/nazimfarhanc',
                    'linkedin' => 'https://www.linkedin.com/in/nazim-farhan-choudhury-661786/',
                ],
            ],
            [
                'name' => 'Hridoy Mustofa',
                'role' => 'Managing Director',
                'photo' => 'assets/img/team/hridoy-mustofa.jpeg',
                'width' => 953,
                'height' => 960,
                'bio' => 'Leads Cyberlog technology direction, cyber defense delivery, and security innovation.',
                'social' => [
                    'facebook' => 'https://www.facebook.com/hridoy.mustofa',
                    'linkedin' => 'https://www.linkedin.com/in/hridoymustofa/',
                ],
            ],
        ]);
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
