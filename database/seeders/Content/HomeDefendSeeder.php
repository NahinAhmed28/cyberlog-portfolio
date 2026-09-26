<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class HomeDefendSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('home_defend', [
            [
                'icon' => 'fas fa-user',
                'label' => 'Mark Smith',
                'paragraph' => 'What policies do you have regarding AI?',
                'icon_2' => 'fas fa-user',
                'label_2' => 'Laura Alman',
                'paragraph_2' => 'Have you found any risks on this supplier?',
                'icon_3' => 'fas fa-user',
                'label_3' => 'Amin Rahman',
                'paragraph_3' => 'Can anyone confirm this phishing indicator?',
                'icon_4' => 'fas fa-user',
                'label_4' => 'Sarah Khan',
                'paragraph_4' => 'Is this vendor exposed to the same CVE?',
                'icon_5' => 'fas fa-user',
                'label_5' => 'David Lee',
                'paragraph_5' => 'Sharing fresh IOC matches from our SOC.',
                'paragraph_6' => 'Collective Defense',
                'heading' => 'Share intelligence with your',
                'heading_2' => 'network and',
                'label_6' => 'Defend-as-One',
                'paragraph_7' => 'By working together, you collectively optimise resources, remove roadblocks to mitigation, and enhance security for every link in the chain.',
                'icon_6' => 'fas fa-share-nodes',
                'div_text' => 'Connected to',
                'heading_3' => 'Industry network',
                'icon_7' => 'fas fa-user',
                'label_7' => '13 Peers',
            ],
        ]);
    }
}
