<?php

// Dedicated feature schemas. Default content lives only in database/seeders/Content.
return [
    'page_ai_automation' => [
        'title' => 'Page AI Automation',
        'group' => 'AI Automation',
        'table' => 'cms_page_ai_automation',
        'source' => 'resources/views/frontend/public/ai-automation.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — AI & Automation',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — AI &',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Automation',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog designs and builds intelligent automation systems for go',
                'type' => 'textarea',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'source_media' => [
                'label' => 'Source Media',
                'type' => 'video',
            ],
            'video_text' => [
                'label' => 'Video Text — Your browser does not support the video tag.',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — The Evolution',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — From Manual Operations to',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Intelligent Automation',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — How institutions and industries have moved from disconnected, pap',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — Evolution // 2015 – 2026',
                'type' => 'text',
            ],
            'div_text_14' => [
                'label' => 'Div Text — 2026',
                'type' => 'text',
            ],
            'div_text_15' => [
                'label' => 'Div Text — Smart, self-operating systems become industry standard',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — WHY CYBERLOG AI & AUTOMATION',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — AI & Automation',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — Benefits',
                'type' => 'text',
            ],
            'paragraph_6' => [
                'label' => 'Paragraph — Our AI-powered solutions help organizations automate operations, ',
                'type' => 'text',
            ],
            'paragraph_13' => [
                'label' => 'Paragraph — CLIENT FEEDBACK',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — Our Clients',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — Say It Best',
                'type' => 'text',
            ],
            'paragraph_14' => [
                'label' => 'Paragraph — Cyberlog\'s AI and automation solutions help organizations moderni',
                'type' => 'text',
            ],
            'img_media_3' => [
                'label' => 'Img Media 3',
                'type' => 'image',
            ],
            'heading_7' => [
                'label' => 'Heading — Akij Venture Ltd.',
                'type' => 'text',
            ],
            'div_aria_label_3' => [
                'label' => 'Div Aria Label 3',
                'type' => 'text',
            ],
            'icon_17' => [
                'label' => 'Icon 17',
                'type' => 'icon',
            ],
            'icon_18' => [
                'label' => 'Icon 18',
                'type' => 'icon',
            ],
            'icon_19' => [
                'label' => 'Icon 19',
                'type' => 'icon',
            ],
            'icon_20' => [
                'label' => 'Icon 20',
                'type' => 'icon',
            ],
            'icon_21' => [
                'label' => 'Icon 21',
                'type' => 'icon',
            ],
            'label_7' => [
                'label' => 'Label — 5.0',
                'type' => 'text',
            ],
            'paragraph_17' => [
                'label' => 'Paragraph — “Cyberlog delivered an automation platform that perfectly matched',
                'type' => 'textarea',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'page_clients' => [
        'title' => 'Page Clients',
        'group' => 'Clients',
        'table' => 'cms_page_clients',
        'source' => 'resources/views/frontend/public/clients.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — CLIENTS',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Trusted Across',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Critical Sectors',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Government, finance, education, and enterprise organizations rely',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_home' => [
        'title' => 'Page Home',
        'group' => 'Home',
        'table' => 'cms_page_home',
        'source' => 'resources/views/frontend/public/home.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'site_public' => [
        'title' => 'Site Public',
        'group' => 'Shared content',
        'table' => 'cms_site_public',
        'source' => 'resources/views/frontend/public/layouts/public.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'default_meta_description' => [
                'label' => 'Default Meta Description',
                'type' => 'textarea',
            ],
            'default_title' => [
                'label' => 'Default Title',
                'type' => 'text',
            ],
            'link_media' => [
                'label' => 'Link Media',
                'type' => 'image',
            ],
        ],
        'shape' => 'object',
    ],
    'clients_client_strip' => [
        'title' => 'Clients Client Strip',
        'group' => 'Archived layouts',
        'table' => 'cms_clients_client_strip',
        'source' => 'resources/views/frontend/public/partials/clients/client-strip.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Clients',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'clients_client_strip_clients' => [
        'title' => 'Clients',
        'group' => 'Archived layouts',
        'table' => 'cms_clients_client_strip_clients',
        'source' => 'resources/views/frontend/public/partials/clients/client-strip.blade.php',
        'parent' => 'clients_client_strip',
        'repeatable' => true,
        'fields' => [
            'slug' => [
                'label' => 'Slug',
                'type' => 'text',
            ],
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'logo' => [
                'label' => 'Logo',
                'type' => 'image',
            ],
        ],
        'shape' => 'object',
    ],
    'clients_deck' => [
        'title' => 'Client stories heading',
        'group' => 'Clients',
        'table' => 'cms_clients_deck',
        'source' => 'resources/views/frontend/public/partials/clients/deck.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Client Websites',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Trusted by',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Government & Enterprise.',
                'type' => 'text',
            ],
            'link_label' => [
                'label' => 'Link Label — View Details',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'button_aria_label' => [
                'label' => 'Button Aria Label',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'button_aria_label_2' => [
                'label' => 'Button Aria Label 2',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'dot_aria_label' => [
                'label' => 'Carousel dot label (screen readers; followed by the client name) — Show',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'clients_deck_screens' => [
        'title' => 'Client stories & screenshots',
        'group' => 'Clients',
        'table' => 'cms_clients_deck_screens',
        'source' => 'resources/views/frontend/public/partials/clients/deck.blade.php',
        'parent' => 'clients_deck',
        'repeatable' => true,
        'fields' => [
            'cat' => [
                'label' => 'Cat',
                'type' => 'text',
            ],
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'shot' => [
                'label' => 'Shot',
                'type' => 'image',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'desc' => [
                'label' => 'Desc',
                'type' => 'textarea',
            ],
            'stats' => [
                'label' => 'Stats',
                'type' => 'list',
                'item' => [
                    'type' => 'object',
                    'label' => 'Statistic',
                    'fields' => [
                        '0' => [
                            'label' => 'Value',
                            'type' => 'text',
                        ],
                        '1' => [
                            'label' => 'Label',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
            'accent' => [
                'label' => 'Accent',
                'type' => 'color',
            ],
        ],
        'shape' => 'object',
    ],
    'footer' => [
        'title' => 'Footer copy & contact details',
        'group' => 'Shared content',
        'table' => 'cms_footer',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'group_routes' => [
                'label' => 'Group Routes',
                'type' => 'object',
                'fields' => [
                    'offensive' => [
                        'label' => 'Offensive',
                        'type' => 'text',
                    ],
                    'defensive' => [
                        'label' => 'Defensive',
                        'type' => 'text',
                    ],
                ],
            ],
            'div_text' => [
                'label' => 'Div Text — Major Services',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Specialized Services',
                'type' => 'text',
            ],
            'div_text_3' => [
                'label' => 'Div Text — Company',
                'type' => 'text',
            ],
            'div_text_4' => [
                'label' => 'Div Text — Contact',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'paragraph' => [
                'label' => 'Paragraph — 374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'link_label_12' => [
                'label' => 'Link Label — info@cyberlog.bd',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — +880 1576-990884',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'a_href_2' => [
                'label' => 'A Href 2',
                'type' => 'url',
            ],
            'link_label_13' => [
                'label' => 'Link Label — https://www.cyberlog.bd',
                'type' => 'url',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — TRAD/DNCC/030973/2025',
                'type' => 'text',
            ],
            'div_text_5' => [
                'label' => 'Div Text — ©',
                'type' => 'text',
            ],
            'div_text_6' => [
                'label' => 'Div Text — Cyberlog. All rights reserved.',
                'type' => 'text',
            ],
            'div_text_7' => [
                'label' => 'Div Text — CYBER SAFE UNIVERSE',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_assessment' => [
        'title' => 'Home Assessment',
        'group' => 'Archived layouts',
        'table' => 'cms_home_assessment',
        'source' => 'resources/views/frontend/public/partials/home/assessment.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Assessment',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — One standardised assessment,',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — complete compliance visibility',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog evaluates each system against a standardised control set',
                'type' => 'textarea',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'div_text' => [
                'label' => 'Div Text — Domain B',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Security Certifications',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — 3',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — Is your organisation ISO 27001 certified?',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'label_4' => [
                'label' => 'Label — Response',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'label_5' => [
                'label' => 'Label — Compliant',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — Yes',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'label_7' => [
                'label' => 'Label — ISO27001-2026.pdf',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'label_8' => [
                'label' => 'Label — Response',
                'type' => 'text',
            ],
            'icon_6' => [
                'label' => 'Icon 6',
                'type' => 'icon',
            ],
            'label_9' => [
                'label' => 'Label — Not compliant',
                'type' => 'text',
            ],
            'label_10' => [
                'label' => 'Label — No',
                'type' => 'text',
            ],
            'icon_7' => [
                'label' => 'Icon 7',
                'type' => 'icon',
            ],
            'label_11' => [
                'label' => 'Label — No evidence',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_cta_banner' => [
        'title' => 'Home Cta Banner',
        'group' => 'Archived layouts',
        'table' => 'cms_home_cta_banner',
        'source' => 'resources/views/frontend/public/partials/home/cta-banner.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'label' => [
                'label' => 'Label — Active threats demand',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Active Cyber Defense',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Our team is ready to help',
                'type' => 'text',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'home_defend' => [
        'title' => 'Home Defend',
        'group' => 'Archived layouts',
        'table' => 'cms_home_defend',
        'source' => 'resources/views/frontend/public/partials/home/defend.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — Mark Smith',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — What policies do you have regarding AI?',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'label_2' => [
                'label' => 'Label — Laura Alman',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Have you found any risks on this supplier?',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'label_3' => [
                'label' => 'Label — Amin Rahman',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Can anyone confirm this phishing indicator?',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'label_4' => [
                'label' => 'Label — Sarah Khan',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — Is this vendor exposed to the same CVE?',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'label_5' => [
                'label' => 'Label — David Lee',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — Sharing fresh IOC matches from our SOC.',
                'type' => 'text',
            ],
            'paragraph_6' => [
                'label' => 'Paragraph — Collective Defense',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Share intelligence with your',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — network and',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — Defend-as-One',
                'type' => 'text',
            ],
            'paragraph_7' => [
                'label' => 'Paragraph — By working together, you collectively optimise resources, remove ',
                'type' => 'text',
            ],
            'icon_6' => [
                'label' => 'Icon 6',
                'type' => 'icon',
            ],
            'div_text' => [
                'label' => 'Div Text — Connected to',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Industry network',
                'type' => 'text',
            ],
            'icon_7' => [
                'label' => 'Icon 7',
                'type' => 'icon',
            ],
            'label_7' => [
                'label' => 'Label — 13 Peers',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_hero' => [
        'title' => 'Hero headline & introduction',
        'group' => 'Home',
        'table' => 'cms_home_hero',
        'source' => 'resources/views/frontend/public/partials/home/hero.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'heading' => [
                'label' => 'Heading — Smarter Intelligence.',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Stronger Security.',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Join our',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Cyber Defense eco-system',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — with',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — hundreds',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — of other organizations!',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_network' => [
        'title' => 'Home Network',
        'group' => 'Archived layouts',
        'table' => 'cms_home_network',
        'source' => 'resources/views/frontend/public/partials/home/network.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Attack Surface',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — As your environment grows,',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — the risks reveal themselves',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — See your full attack surface as it truly exists — every endpoint,',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'home_our_story' => [
        'title' => 'Company story headings',
        'group' => 'Home',
        'table' => 'cms_home_our_story',
        'source' => 'resources/views/frontend/public/partials/home/our-story.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Our Story',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — The Story of',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Our Growth',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_our_story_milestones' => [
        'title' => 'Company milestones',
        'group' => 'Home',
        'table' => 'cms_home_our_story_milestones',
        'source' => 'resources/views/frontend/public/partials/home/our-story.blade.php',
        'parent' => 'home_our_story',
        'repeatable' => true,
        'fields' => [
            'year' => [
                'label' => 'Year',
                'type' => 'text',
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
            'x' => [
                'label' => 'X',
                'type' => 'number',
            ],
            'y' => [
                'label' => 'Y',
                'type' => 'number',
            ],
            'tone' => [
                'label' => 'Tone',
                'type' => 'color',
            ],
            'toneRgb' => [
                'label' => 'Tonergb',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_solutions' => [
        'title' => 'Home Solutions',
        'group' => 'Home',
        'table' => 'cms_home_solutions',
        'source' => 'resources/views/frontend/public/partials/home/solutions.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'group_routes' => [
                'label' => 'Group Routes',
                'type' => 'object',
                'fields' => [
                    'offensive' => [
                        'label' => 'Offensive',
                        'type' => 'text',
                    ],
                    'defensive' => [
                        'label' => 'Defensive',
                        'type' => 'text',
                    ],
                ],
            ],
            'paragraph' => [
                'label' => 'Paragraph — Security Solutions',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Explore Our',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Security Solutions',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Learn More',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'home_tech_diagram' => [
        'title' => 'Engagement process headings',
        'group' => 'Home',
        'table' => 'cms_home_tech_diagram',
        'source' => 'resources/views/frontend/public/partials/home/tech-diagram.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — HOW WE WORK',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — OUR ENGAGEMENT',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — PROCESS',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — A structured, repeatable methodology that takes you from risk dis',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label_3' => [
                'label' => 'Label — Cyberlog',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — Security Ops',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_threats' => [
        'title' => 'Home Threats',
        'group' => 'Archived layouts',
        'table' => 'cms_home_threats',
        'source' => 'resources/views/frontend/public/partials/home/threats.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Threat Intelligence',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Stay ahead of emerging threats',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — with continuous risk signals',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Stay on top of the latest emerging threats, their blast radius, a',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'div_text' => [
                'label' => 'Div Text — Emerging threat',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — React2Shell',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — A critical vulnerability has been identified in the JavaScript li',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'label_4' => [
                'label' => 'Label — 12 investigating',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'label_5' => [
                'label' => 'Label — 4 remediating',
                'type' => 'text',
            ],
            'icon_6' => [
                'label' => 'Icon 6',
                'type' => 'icon',
            ],
            'label_6' => [
                'label' => 'Label — 5 resolved',
                'type' => 'text',
            ],
            'icon_7' => [
                'label' => 'Icon 7',
                'type' => 'icon',
            ],
            'label_7' => [
                'label' => 'Label — 6 unaffected',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'nav' => [
        'title' => 'Navigation & branding',
        'group' => 'Shared content',
        'table' => 'cms_nav',
        'source' => 'resources/views/frontend/public/partials/nav.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'img_media' => [
                'label' => 'Img Media',
                'type' => 'image',
            ],
            'img_alt' => [
                'label' => 'Img Alt',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Menu',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_label' => [
                'label' => 'Link Label — Home',
                'type' => 'text',
            ],
            'link_label_2' => [
                'label' => 'Link Label — Services',
                'type' => 'text',
            ],
            'link_label_3' => [
                'label' => 'Link Label — All Services',
                'type' => 'text',
            ],
            'link_label_6' => [
                'label' => 'Link Label — Prohoree 365',
                'type' => 'text',
            ],
            'link_label_7' => [
                'label' => 'Link Label — Company',
                'type' => 'text',
            ],
            'link_label_12' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
            'destination_2' => [
                'label' => 'Destination 2',
                'type' => 'url',
            ],
            'destination_3' => [
                'label' => 'Destination 3',
                'type' => 'url',
            ],
            'destination_6' => [
                'label' => 'Destination 6',
                'type' => 'url',
            ],
            'destination_11' => [
                'label' => 'Destination 11',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'nav_primary_routes' => [
        'title' => 'Primary Routes',
        'group' => 'Shared content',
        'table' => 'cms_nav_primary_routes',
        'source' => 'resources/views/frontend/public/partials/nav.blade.php',
        'parent' => 'nav',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'text',
            ],
        ],
        'shape' => 'scalar',
    ],
    'soc_benefits' => [
        'title' => 'SOC Benefits',
        'group' => 'SOC',
        'table' => 'cms_soc_benefits',
        'source' => 'resources/views/frontend/public/partials/soc/benefits.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Why Cyberlog SOC',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — SOC Benefits',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_benefits_benefits' => [
        'title' => 'SOC Benefits Benefits',
        'group' => 'SOC',
        'table' => 'cms_soc_benefits_benefits',
        'source' => 'resources/views/frontend/public/partials/soc/benefits.blade.php',
        'parent' => 'soc_benefits',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'soc_calculator' => [
        'title' => 'SOC Calculator',
        'group' => 'SOC',
        'table' => 'cms_soc_calculator',
        'source' => 'resources/views/frontend/public/partials/soc/calculator.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — SOC as a Service',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Estimate Your',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — SOC Cost',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Managed SOC pricing scales with your environment — endpoints, log',
                'type' => 'textarea',
            ],
            'label_2' => [
                'label' => 'Label — Endpoints / devices',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — 1',
                'type' => 'text',
            ],
            'input_min' => [
                'label' => 'Input Min',
                'type' => 'number',
            ],
            'input_max' => [
                'label' => 'Input Max',
                'type' => 'number',
            ],
            'input_step' => [
                'label' => 'Input Step',
                'type' => 'number',
            ],
            'label_4' => [
                'label' => 'Label — Log volume',
                'type' => 'text',
            ],
            'small_text' => [
                'label' => 'Small Text — (GB / day)',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — 1',
                'type' => 'text',
            ],
            'input_min_2' => [
                'label' => 'Input Min 2',
                'type' => 'number',
            ],
            'input_max_2' => [
                'label' => 'Input Max 2',
                'type' => 'number',
            ],
            'input_step_2' => [
                'label' => 'Input Step 2',
                'type' => 'number',
            ],
            'label_6' => [
                'label' => 'Label — Coverage',
                'type' => 'text',
            ],
            'button_data_mult' => [
                'label' => 'Button Data Mult',
                'type' => 'number',
            ],
            'button_label' => [
                'label' => 'Button Label — 24 / 7',
                'type' => 'text',
            ],
            'button_data_mult_2' => [
                'label' => 'Button Data Mult 2',
                'type' => 'number',
            ],
            'button_label_2' => [
                'label' => 'Button Label — Business hours',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — $',
                'type' => 'text',
            ],
            'label_7' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'small_text_2' => [
                'label' => 'Small Text — /mo',
                'type' => 'text',
            ],
            'link_label' => [
                'label' => 'Link Label — Get a Tailored Quote',
                'type' => 'text',
            ],
            'base_cost' => [
                'type' => 'number',
                'label' => 'Base Cost',
            ],
            'per_endpoint' => [
                'type' => 'number',
                'label' => 'Per Endpoint',
            ],
            'per_gb' => [
                'type' => 'number',
                'label' => 'Per Gb',
            ],
            'rounding_increment' => [
                'type' => 'number',
                'label' => 'Rounding Increment',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
            'initial_value' => [
                'label' => 'Initial Value',
                'type' => 'number',
            ],
            'initial_value_2' => [
                'label' => 'Initial Value 2',
                'type' => 'number',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_comparison' => [
        'title' => 'SOC Comparison',
        'group' => 'SOC',
        'table' => 'cms_soc_comparison',
        'source' => 'resources/views/frontend/public/partials/soc/comparison.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Comparison',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Which SOC Model Delivers Real Value?',
                'type' => 'text',
            ],
            'th_text' => [
                'label' => 'Th Text — SOC Model',
                'type' => 'text',
            ],
            'th_text_2' => [
                'label' => 'Th Text — Setup Time',
                'type' => 'text',
            ],
            'th_text_3' => [
                'label' => 'Th Text — MTTR (hrs)',
                'type' => 'text',
            ],
            'th_text_4' => [
                'label' => 'Th Text — Threats Stopped',
                'type' => 'text',
            ],
            'th_text_5' => [
                'label' => 'Th Text — SLA / KPI',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_comparison_rows' => [
        'title' => 'SOC comparison rows',
        'group' => 'SOC',
        'table' => 'cms_soc_comparison_rows',
        'source' => 'resources/views/frontend/public/partials/soc/comparison.blade.php',
        'parent' => 'soc_comparison',
        'repeatable' => true,
        'fields' => [
            'model' => [
                'label' => 'Model',
                'type' => 'text',
            ],
            'cost' => [
                'label' => 'Cost',
                'type' => 'text',
            ],
            'setup' => [
                'label' => 'Setup',
                'type' => 'text',
            ],
            'mttr' => [
                'label' => 'Mttr',
                'type' => 'text',
            ],
            'stopped' => [
                'label' => 'Stopped',
                'type' => 'text',
            ],
            'sla' => [
                'label' => 'Sla',
                'type' => 'text',
            ],
            'hl' => [
                'label' => 'Hl',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_expert' => [
        'title' => 'SOC Expert',
        'group' => 'Archived layouts',
        'table' => 'cms_soc_expert',
        'source' => 'resources/views/frontend/public/partials/soc/expert.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Talk to Our SOC Team',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Need',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — SOC Support?',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Discuss your SOC requirement with Cyberlog. We can help with SOC ',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'list_text' => [
                'label' => 'List Text — Dhaka, Bangladesh',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — info@cyberlog.bd',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'list_text_2' => [
                'label' => 'List Text — +88013576990884',
                'type' => 'text',
            ],
            'input_placeholder_3' => [
                'label' => 'Input Placeholder 3',
                'type' => 'text',
            ],
            'input_placeholder_4' => [
                'label' => 'Input Placeholder 4',
                'type' => 'text',
            ],
            'option_text' => [
                'label' => 'Option Text — Coverage Needed',
                'type' => 'text',
            ],
            'option_text_2' => [
                'label' => 'Option Text — SOC Implementation',
                'type' => 'text',
            ],
            'option_text_3' => [
                'label' => 'Option Text — Fully Managed SOC',
                'type' => 'text',
            ],
            'option_text_4' => [
                'label' => 'Option Text — Co-managed SOC',
                'type' => 'text',
            ],
            'option_text_5' => [
                'label' => 'Option Text — SIEM Monitoring',
                'type' => 'text',
            ],
            'option_text_6' => [
                'label' => 'Option Text — Incident Response Support',
                'type' => 'text',
            ],
            'option_text_7' => [
                'label' => 'Option Text — Not Sure Yet',
                'type' => 'text',
            ],
            'textarea_placeholder' => [
                'label' => 'Textarea Placeholder',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'button_label' => [
                'label' => 'Button Label — Talk to an Expert',
                'type' => 'text',
            ],
            'name_placeholder' => [
                'label' => 'Name Placeholder',
                'type' => 'text',
            ],
            'company_placeholder' => [
                'label' => 'Company Placeholder',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_hero' => [
        'title' => 'SOC Hero',
        'group' => 'SOC',
        'table' => 'cms_soc_hero',
        'source' => 'resources/views/frontend/public/partials/soc/hero.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Security Operations Center',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — 24/7',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — SOC',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog provides fully managed and co-managed SOC support, SOC s',
                'type' => 'textarea',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_label_2' => [
                'label' => 'Link Label — SOC Cost Calculator',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — SOC // Live Operations',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — 1204',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — Alerts Triaged',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — 0.5h',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — Mean MTTR',
                'type' => 'text',
            ],
            'label_7' => [
                'label' => 'Label — 38',
                'type' => 'text',
            ],
            'label_8' => [
                'label' => 'Label — Threats Blocked',
                'type' => 'text',
            ],
            'div_aria_label' => [
                'label' => 'Div Aria Label',
                'type' => 'text',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_hero_height_items' => [
        'title' => 'SOC Hero Height Items',
        'group' => 'SOC',
        'table' => 'cms_soc_hero_height_items',
        'source' => 'resources/views/frontend/public/partials/soc/hero.blade.php',
        'parent' => 'soc_hero',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'number',
            ],
        ],
        'shape' => 'scalar',
    ],
    'soc_matrix' => [
        'title' => 'SOC Matrix',
        'group' => 'SOC',
        'table' => 'cms_soc_matrix',
        'source' => 'resources/views/frontend/public/partials/soc/matrix.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Managed SOC Coverage',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — What\'s Included in Each Tier',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Choose the level of monitoring, response, and analyst support you',
                'type' => 'text',
            ],
            'th_text' => [
                'label' => 'Th Text — Capability',
                'type' => 'text',
            ],
            'span_aria_label' => [
                'label' => 'Span Aria Label',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'span_aria_label_2' => [
                'label' => 'Span Aria Label 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_matrix_caps' => [
        'title' => 'SOC capability rows',
        'group' => 'SOC',
        'table' => 'cms_soc_matrix_caps',
        'source' => 'resources/views/frontend/public/partials/soc/matrix.blade.php',
        'parent' => 'soc_matrix',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'number',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'number',
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'number',
            ],
        ],
        'shape' => 'tuple',
    ],
    'soc_matrix_tiers' => [
        'title' => 'SOC comparison columns',
        'group' => 'SOC',
        'table' => 'cms_soc_matrix_tiers',
        'source' => 'resources/views/frontend/public/partials/soc/matrix.blade.php',
        'parent' => 'soc_matrix',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'text',
            ],
        ],
        'shape' => 'scalar',
    ],
    'soc_numbers' => [
        'title' => 'SOC Numbers',
        'group' => 'SOC',
        'table' => 'cms_soc_numbers',
        'source' => 'resources/views/frontend/public/partials/soc/numbers.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Operational Impact',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Cyberlog SOC',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Managed Services by the Numbers',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_pricing' => [
        'title' => 'SOC Pricing',
        'group' => 'SOC',
        'table' => 'cms_soc_pricing',
        'source' => 'resources/views/frontend/public/partials/soc/pricing.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Pricing',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Custom SOC Plans',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Most Popular',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — Custom',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_label' => [
                'label' => 'Link Label — Get a Quote',
                'type' => 'text',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_pricing_plans' => [
        'title' => 'SOC pricing plans',
        'group' => 'SOC',
        'table' => 'cms_soc_pricing_plans',
        'source' => 'resources/views/frontend/public/partials/soc/pricing.blade.php',
        'parent' => 'soc_pricing',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'tuple',
    ],
    'soc_reviews' => [
        'title' => 'SOC Reviews',
        'group' => 'SOC',
        'table' => 'cms_soc_reviews',
        'source' => 'resources/views/frontend/public/partials/soc/reviews.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — CLIENT FEEDBACK',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Our customers',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — say it best',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog SOC helps organizations improve visibility, reduce alert',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — “',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — ”',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_reviews_reviews' => [
        'title' => 'SOC Reviews Reviews',
        'group' => 'SOC',
        'table' => 'cms_soc_reviews_reviews',
        'source' => 'resources/views/frontend/public/partials/soc/reviews.blade.php',
        'parent' => 'soc_reviews',
        'repeatable' => true,
        'fields' => [
            'source' => [
                'label' => 'Source',
                'type' => 'text',
            ],
            'sourceKey' => [
                'label' => 'Sourcekey',
                'type' => 'text',
            ],
            'logo' => [
                'label' => 'Logo',
                'type' => 'image',
            ],
            'rating' => [
                'label' => 'Rating',
                'type' => 'text',
            ],
            'quote' => [
                'label' => 'Quote',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_sensor' => [
        'title' => 'SOC Sensor',
        'group' => 'Archived layouts',
        'table' => 'cms_soc_sensor',
        'source' => 'resources/views/frontend/public/partials/soc/sensor.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — New System Sensor',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Continuous Telemetry, Everywhere',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog deploys sensors across your environment so nothing happe',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_sensor_sensors' => [
        'title' => 'SOC Sensor Sensors',
        'group' => 'Archived layouts',
        'table' => 'cms_soc_sensor_sensors',
        'source' => 'resources/views/frontend/public/partials/soc/sensor.blade.php',
        'parent' => 'soc_sensor',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'vapt_benefits' => [
        'title' => 'VAPT Benefits',
        'group' => 'VAPT',
        'table' => 'cms_vapt_benefits',
        'source' => 'resources/views/frontend/public/partials/vapt/benefits.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Why Cyberlog VAPT',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Benefits',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_benefits_benefits' => [
        'title' => 'VAPT Benefits Benefits',
        'group' => 'VAPT',
        'table' => 'cms_vapt_benefits_benefits',
        'source' => 'resources/views/frontend/public/partials/vapt/benefits.blade.php',
        'parent' => 'vapt_benefits',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'vapt_boxes' => [
        'title' => 'VAPT Boxes',
        'group' => 'VAPT',
        'table' => 'cms_vapt_boxes',
        'source' => 'resources/views/frontend/public/partials/vapt/boxes.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Testing Approaches',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Black Box, Grey Box & White Box Testing',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Choose the testing approach based on available access, project go',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Conditions:',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Value:',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_boxes_boxes' => [
        'title' => 'VAPT Boxes Boxes',
        'group' => 'VAPT',
        'table' => 'cms_vapt_boxes_boxes',
        'source' => 'resources/views/frontend/public/partials/vapt/boxes.blade.php',
        'parent' => 'vapt_boxes',
        'repeatable' => true,
        'fields' => [
            'class' => [
                'label' => 'Class',
                'type' => 'text',
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'conditions' => [
                'label' => 'Conditions',
                'type' => 'text',
            ],
            'value' => [
                'label' => 'Value',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_calculator' => [
        'title' => 'VAPT Calculator',
        'group' => 'VAPT',
        'table' => 'cms_vapt_calculator',
        'source' => 'resources/views/frontend/public/partials/vapt/calculator.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Service Calculator',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Estimate Your',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — VAPT Scope',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — VAPT effort depends on asset count, application complexity, user ',
                'type' => 'textarea',
            ],
            'label_2' => [
                'label' => 'Label — Web Applications',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'input_min' => [
                'label' => 'Input Min',
                'type' => 'number',
            ],
            'input_max' => [
                'label' => 'Input Max',
                'type' => 'number',
            ],
            'label_4' => [
                'label' => 'Label — APIs',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'input_min_2' => [
                'label' => 'Input Min 2',
                'type' => 'number',
            ],
            'input_max_2' => [
                'label' => 'Input Max 2',
                'type' => 'number',
            ],
            'label_6' => [
                'label' => 'Label — Mobile Applications',
                'type' => 'text',
            ],
            'label_7' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'input_min_3' => [
                'label' => 'Input Min 3',
                'type' => 'number',
            ],
            'input_max_3' => [
                'label' => 'Input Max 3',
                'type' => 'number',
            ],
            'label_8' => [
                'label' => 'Label — Network Assets / IPs',
                'type' => 'text',
            ],
            'label_9' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'input_min_4' => [
                'label' => 'Input Min 4',
                'type' => 'number',
            ],
            'input_max_4' => [
                'label' => 'Input Max 4',
                'type' => 'number',
            ],
            'label_10' => [
                'label' => 'Label — Testing approach',
                'type' => 'text',
            ],
            'button_data_mult' => [
                'label' => 'Button Data Mult',
                'type' => 'number',
            ],
            'button_label' => [
                'label' => 'Button Label — Black',
                'type' => 'text',
            ],
            'button_data_mult_2' => [
                'label' => 'Button Data Mult 2',
                'type' => 'number',
            ],
            'button_label_2' => [
                'label' => 'Button Label — Grey',
                'type' => 'text',
            ],
            'button_data_mult_3' => [
                'label' => 'Button Data Mult 3',
                'type' => 'number',
            ],
            'button_label_3' => [
                'label' => 'Button Label — White',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — BDT',
                'type' => 'text',
            ],
            'label_11' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — estimated cost',
                'type' => 'text',
            ],
            'label_12' => [
                'label' => 'Label — 0',
                'type' => 'text',
            ],
            'div_text_3' => [
                'label' => 'Div Text — analyst days',
                'type' => 'text',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Get This Quote',
                'type' => 'text',
            ],
            'day_rate' => [
                'type' => 'number',
                'label' => 'Day Rate',
            ],
            'web_app_days' => [
                'type' => 'number',
                'label' => 'Web App Days',
            ],
            'api_days' => [
                'type' => 'number',
                'label' => 'Api Days',
            ],
            'mobile_app_days' => [
                'type' => 'number',
                'label' => 'Mobile App Days',
            ],
            'ips_per_day' => [
                'type' => 'number',
                'label' => 'Ips Per Day',
            ],
            'breakdown_template' => [
                'type' => 'text',
                'label' => 'Breakdown Template',
            ],
            'initial_value' => [
                'label' => 'Initial Value',
                'type' => 'number',
            ],
            'initial_value_2' => [
                'label' => 'Initial Value 2',
                'type' => 'number',
            ],
            'initial_value_3' => [
                'label' => 'Initial Value 3',
                'type' => 'number',
            ],
            'initial_value_4' => [
                'label' => 'Initial Value 4',
                'type' => 'number',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_hero' => [
        'title' => 'VAPT Hero',
        'group' => 'VAPT',
        'table' => 'cms_vapt_hero',
        'source' => 'resources/views/frontend/public/partials/vapt/hero.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Vulnerability Assessment & Penetration Testing',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Find and Fix Security Risks',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Before Attackers Do',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog identifies, validates, and prioritizes exploitable weakn',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — VAPT // Active Assessment',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'heading_2' => [
                'label' => 'Heading — From Exposure to Exploit',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — External exposure, authentication bypass, privilege escalation, a',
                'type' => 'text',
            ],
            'div_aria_label' => [
                'label' => 'Div Aria Label',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — 24',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — findings',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — 1,842',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — requests tested',
                'type' => 'text',
            ],
            'div_aria_label_2' => [
                'label' => 'Div Aria Label 2',
                'type' => 'text',
            ],
            'div_aria_label_3' => [
                'label' => 'Div Aria Label 3',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_hero_height_items' => [
        'title' => 'VAPT Hero Height Items',
        'group' => 'VAPT',
        'table' => 'cms_vapt_hero_height_items',
        'source' => 'resources/views/frontend/public/partials/vapt/hero.blade.php',
        'parent' => 'vapt_hero',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'number',
            ],
        ],
        'shape' => 'scalar',
    ],
    'vapt_hero_step_items' => [
        'title' => 'VAPT Hero Step Items',
        'group' => 'VAPT',
        'table' => 'cms_vapt_hero_step_items',
        'source' => 'resources/views/frontend/public/partials/vapt/hero.blade.php',
        'parent' => 'vapt_hero',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'text',
            ],
        ],
        'shape' => 'scalar',
    ],
    'vapt_matrix' => [
        'title' => 'VAPT Matrix',
        'group' => 'VAPT',
        'table' => 'cms_vapt_matrix',
        'source' => 'resources/views/frontend/public/partials/vapt/matrix.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Why Cyberlog VAPT',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Basic VAPT vs Cyberlog VAPT',
                'type' => 'text',
            ],
            'th_text' => [
                'label' => 'Th Text — Area',
                'type' => 'text',
            ],
            'th_text_2' => [
                'label' => 'Th Text — Basic VAPT',
                'type' => 'text',
            ],
            'th_text_3' => [
                'label' => 'Th Text — Cyberlog VAPT',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_matrix_rows' => [
        'title' => 'VAPT comparison rows',
        'group' => 'VAPT',
        'table' => 'cms_vapt_matrix_rows',
        'source' => 'resources/views/frontend/public/partials/vapt/matrix.blade.php',
        'parent' => 'vapt_matrix',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'vapt_numbers' => [
        'title' => 'VAPT Numbers',
        'group' => 'VAPT',
        'table' => 'cms_vapt_numbers',
        'source' => 'resources/views/frontend/public/partials/vapt/numbers.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'section_aria_label' => [
                'label' => 'Section Aria Label',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_posture' => [
        'title' => 'VAPT Posture',
        'group' => 'VAPT',
        'table' => 'cms_vapt_posture',
        'source' => 'resources/views/frontend/public/partials/vapt/posture.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'label' => [
                'label' => 'Label — VAPT',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_posture_nodes' => [
        'title' => 'VAPT Posture Nodes',
        'group' => 'VAPT',
        'table' => 'cms_vapt_posture_nodes',
        'source' => 'resources/views/frontend/public/partials/vapt/posture.blade.php',
        'parent' => 'vapt_posture',
        'repeatable' => true,
        'fields' => [
            'side' => [
                'label' => 'Side',
                'type' => 'text',
            ],
            'slot' => [
                'label' => 'Slot',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'color' => [
                'label' => 'Color',
                'type' => 'color',
            ],
            'rgb' => [
                'label' => 'Rgb',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_reviews' => [
        'title' => 'VAPT Reviews',
        'group' => 'VAPT',
        'table' => 'cms_vapt_reviews',
        'source' => 'resources/views/frontend/public/partials/vapt/reviews.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — CLIENT FEEDBACK',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Our customers',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — say it best',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Recognized by clients for practical security delivery, clear repo',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — “',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — ”',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_reviews_reviews' => [
        'title' => 'VAPT Reviews Reviews',
        'group' => 'VAPT',
        'table' => 'cms_vapt_reviews_reviews',
        'source' => 'resources/views/frontend/public/partials/vapt/reviews.blade.php',
        'parent' => 'vapt_reviews',
        'repeatable' => true,
        'fields' => [
            'rating' => [
                'label' => 'Rating',
                'type' => 'text',
            ],
            'quote' => [
                'label' => 'Quote',
                'type' => 'textarea',
            ],
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'logo' => [
                'label' => 'Logo',
                'type' => 'image',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_success' => [
        'title' => 'VAPT Success',
        'group' => 'Archived layouts',
        'table' => 'cms_vapt_success',
        'source' => 'resources/views/frontend/public/partials/vapt/success.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — System Success Story',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Bangladesh Finance Strengthened Its Digital Risk Visibility',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog conducted VAPT for Bangladesh Finance to identify, valid',
                'type' => 'textarea',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Discuss a Similar Assessment',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Financial Institute',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — VAPT Engagement',
                'type' => 'text',
            ],
            'b_text' => [
                'label' => 'B Text — Scope',
                'type' => 'text',
            ],
            'b_text_2' => [
                'label' => 'B Text — Validate',
                'type' => 'text',
            ],
            'b_text_3' => [
                'label' => 'B Text — Prioritize',
                'type' => 'text',
            ],
            'b_text_4' => [
                'label' => 'B Text — Retest',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vciso_hero' => [
        'title' => 'vCISO Hero',
        'group' => 'Prohoree 365',
        'table' => 'cms_vciso_hero',
        'source' => 'resources/views/frontend/public/partials/vciso/hero.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'heading' => [
                'label' => 'Heading — Bangladesh\'s First Unified Cybersecurity Solution:',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Prohoree 365',
                'type' => 'text',
            ],
            'source_media' => [
                'label' => 'Source Media',
                'type' => 'video',
            ],
            'video_text' => [
                'label' => 'Video Text — Your browser does not support the video tag.',
                'type' => 'text',
            ],
            'div_aria_label' => [
                'label' => 'Div Aria Label',
                'type' => 'text',
            ],
            'div_aria_label_2' => [
                'label' => 'Div Aria Label 2',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Prohoree',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — 365',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vciso_hero_left_nodes' => [
        'title' => 'vCISO Hero Left Nodes',
        'group' => 'Prohoree 365',
        'table' => 'cms_vciso_hero_left_nodes',
        'source' => 'resources/views/frontend/public/partials/vciso/hero.blade.php',
        'parent' => 'vciso_hero',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'x' => [
                'label' => 'X',
                'type' => 'number',
            ],
            'y' => [
                'label' => 'Y',
                'type' => 'number',
            ],
        ],
        'shape' => 'object',
    ],
    'vciso_hero_right_nodes' => [
        'title' => 'vCISO Hero Right Nodes',
        'group' => 'Prohoree 365',
        'table' => 'cms_vciso_hero_right_nodes',
        'source' => 'resources/views/frontend/public/partials/vciso/hero.blade.php',
        'parent' => 'vciso_hero',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'x' => [
                'label' => 'X',
                'type' => 'number',
            ],
            'y' => [
                'label' => 'Y',
                'type' => 'number',
            ],
        ],
        'shape' => 'object',
    ],
    'vciso_product' => [
        'title' => 'vCISO Product',
        'group' => 'Prohoree 365',
        'table' => 'cms_vciso_product',
        'source' => 'resources/views/frontend/public/partials/vciso/product.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Prohoree 365',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Prohoree 365 Components',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'vciso_product_modules' => [
        'title' => 'Prohoree product modules',
        'group' => 'Prohoree 365',
        'table' => 'cms_vciso_product_modules',
        'source' => 'resources/views/frontend/public/partials/vciso/product.blade.php',
        'parent' => 'vciso_product',
        'repeatable' => true,
        'fields' => [
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'team' => [
                'label' => 'Team',
                'type' => 'text',
            ],
            'screenshot' => [
                'label' => 'Screenshot',
                'type' => 'image',
            ],
            'headline' => [
                'label' => 'Headline',
                'type' => 'richtext',
            ],
            'body' => [
                'label' => 'Body',
                'type' => 'textarea',
            ],
            'points' => [
                'label' => 'Points',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'console' => [
                'label' => 'Console',
                'type' => 'list',
                'item' => [
                    'type' => 'object',
                    'label' => 'Statistic',
                    'fields' => [
                        '0' => [
                            'label' => 'Value',
                            'type' => 'text',
                        ],
                        '1' => [
                            'label' => 'Label',
                            'type' => 'text',
                        ],
                        '2' => [
                            'label' => 'Status chip',
                            'type' => 'text',
                        ],
                        '3' => [
                            'label' => 'Tone (blue, warm, red)',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'page_service_detail' => [
        'title' => 'Page Service Detail',
        'group' => 'Service Detail',
        'table' => 'cms_page_service_detail',
        'source' => 'resources/views/frontend/public/service-detail.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — What We Deliver',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Dedicated',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Support',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
            'page_title_suffix' => [
                'label' => 'Browser tab title suffix (after the service name) — - Cyberlog',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_soc' => [
        'title' => 'Page SOC',
        'group' => 'SOC',
        'table' => 'cms_page_soc',
        'source' => 'resources/views/frontend/public/soc.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'page_vapt' => [
        'title' => 'Page VAPT',
        'group' => 'VAPT',
        'table' => 'cms_page_vapt',
        'source' => 'resources/views/frontend/public/vapt.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'meta_description' => [
                'label' => 'Meta Description',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'page_vciso' => [
        'title' => 'Page vCISO',
        'group' => 'vCISO',
        'table' => 'cms_page_vciso',
        'source' => 'resources/views/frontend/public/vciso.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'meta_description' => [
                'label' => 'Meta Description',
                'type' => 'textarea',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'layout_portfolio' => [
        'title' => 'Layout Portfolio',
        'group' => 'Shared content',
        'table' => 'cms_layout_portfolio',
        'source' => 'resources/views/layouts/portfolio.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'default_title' => [
                'label' => 'Default Title',
                'type' => 'text',
            ],
            'link_media' => [
                'label' => 'Link Media',
                'type' => 'image',
            ],
        ],
        'shape' => 'object',
    ],
    'page_about' => [
        'title' => 'Page About',
        'group' => 'About',
        'table' => 'cms_page_about',
        'source' => 'resources/views/pages/about.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_capacity_building' => [
        'title' => 'Page Capacity Building',
        'group' => 'Capacity Building',
        'table' => 'cms_page_capacity_building',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Awareness & Security Training',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Awareness &',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Security Training',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Strengthen your organization\'s human firewall with practical, rol',
                'type' => 'text',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'source_media' => [
                'label' => 'Source Media',
                'type' => 'video',
            ],
            'video_text' => [
                'label' => 'Video Text — Your browser does not support the video tag.',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — WHY IT MATTERS',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — WHY IT MATTERS',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — Our Way of Conducting Training',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — How We Train Your Team',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — Get Started',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — Get Your Staff Started With Training Today',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'page_capacity_building_item_items' => [
        'title' => 'Item Items',
        'group' => 'Capacity Building',
        'table' => 'cms_page_capacity_building_item_items',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => 'page_capacity_building',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_capacity_building_w_items' => [
        'title' => 'W Items',
        'group' => 'Capacity Building',
        'table' => 'cms_page_capacity_building_w_items',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => 'page_capacity_building',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_career' => [
        'title' => 'Page Career',
        'group' => 'Career',
        'table' => 'cms_page_career',
        'source' => 'resources/views/pages/career.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'eyebrow' => [
                'label' => 'Eyebrow',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading',
                'type' => 'richtext',
            ],
            'subheading' => [
                'label' => 'Subheading',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'hero_icon' => [
                'label' => 'Hero Icon',
                'type' => 'icon',
            ],
            'hero_caption' => [
                'label' => 'Hero Caption',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Our Values',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Our Values',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Why Cyberlog',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Love From Here, Work That Matters',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Open Roles',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — Current Openings',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Apply',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — Don\'t see a role that fits?',
                'type' => 'text',
            ],
            'link_url_2' => [
                'label' => 'Link Url 2',
                'type' => 'url',
            ],
            'link_label_2' => [
                'label' => 'Link Label — Send us your CV',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_career_w_items' => [
        'title' => 'Company values',
        'group' => 'Career',
        'table' => 'cms_page_career_w_items',
        'source' => 'resources/views/pages/career.blade.php',
        'parent' => 'page_career',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_career_w_items_2' => [
        'title' => 'Career benefits',
        'group' => 'Career',
        'table' => 'cms_page_career_w_items_2',
        'source' => 'resources/views/pages/career.blade.php',
        'parent' => 'page_career',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_career_job_items' => [
        'title' => 'Job openings',
        'group' => 'Career',
        'table' => 'cms_page_career_job_items',
        'source' => 'resources/views/pages/career.blade.php',
        'parent' => 'page_career',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_contact' => [
        'title' => 'Page Contact',
        'group' => 'Contact',
        'table' => 'cms_page_contact',
        'source' => 'resources/views/pages/contact.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Reach Us',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Talk to a',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — security expert',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Tell us a little about your environment and goals — we\'ll get bac',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'list_text' => [
                'label' => 'List Text — 374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — info@cyberlog.bd',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'list_text_2' => [
                'label' => 'List Text — +880 1576-990884',
                'type' => 'text',
            ],
            'input_placeholder_3' => [
                'label' => 'Input Placeholder 3',
                'type' => 'text',
            ],
            'input_placeholder_4' => [
                'label' => 'Input Placeholder 4',
                'type' => 'text',
            ],
            'option_text' => [
                'label' => 'Option Text — I\'m interested in…',
                'type' => 'text',
            ],
            'textarea_placeholder' => [
                'label' => 'Textarea Placeholder',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Send Message',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Find Us',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Our',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Location',
                'type' => 'text',
            ],
            'iframe_src' => [
                'label' => 'Iframe Src',
                'type' => 'url',
            ],
            'success_message' => [
                'type' => 'text',
                'label' => 'Success Message',
            ],
            'name_placeholder' => [
                'label' => 'Name Placeholder',
                'type' => 'text',
            ],
            'company_placeholder' => [
                'label' => 'Company Placeholder',
                'type' => 'text',
            ],
            'service_aria_label' => [
                'label' => 'Service dropdown label (screen readers) — Service of interest',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_defense_services' => [
        'title' => 'Legacy Pages Defense Services',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_defense_services',
        'source' => 'resources/views/pages/defense-services.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — What We Test',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Offensive',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Security Services',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label_2' => [
                'label' => 'Label — Related:',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — ·',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — What We Defend',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Defensive',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — Security Services',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'label_5' => [
                'label' => 'Label — Related:',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — ·',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_defense_services_offensive' => [
        'title' => 'Offensive',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_defense_services_offensive',
        'source' => 'resources/views/pages/defense-services.blade.php',
        'parent' => 'legacy_pages_defense_services',
        'repeatable' => true,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'points' => [
                'label' => 'Points',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'related' => [
                'label' => 'Related',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_defense_services_defensive' => [
        'title' => 'Defensive',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_defense_services_defensive',
        'source' => 'resources/views/pages/defense-services.blade.php',
        'parent' => 'legacy_pages_defense_services',
        'repeatable' => true,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'points' => [
                'label' => 'Points',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'related' => [
                'label' => 'Related',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'page_defensive_security_services' => [
        'title' => 'Page Defensive Security Services',
        'group' => 'Defensive Security Services',
        'table' => 'cms_page_defensive_security_services',
        'source' => 'resources/views/pages/defensive-security-services.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'eyebrow' => [
                'label' => 'Eyebrow',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'summary' => [
                'label' => 'Summary',
                'type' => 'textarea',
            ],
            'hero_icon' => [
                'label' => 'Hero Icon',
                'type' => 'icon',
            ],
            'hero_image' => [
                'label' => 'Hero Image',
                'type' => 'image',
            ],
            'hero_image_alt' => [
                'label' => 'Hero Image Alt',
                'type' => 'text',
            ],
            'cta_title' => [
                'label' => 'Cta Title',
                'type' => 'text',
            ],
            'cta_text' => [
                'label' => 'Cta Text',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_defensive_security_services_items' => [
        'title' => 'Items',
        'group' => 'Defensive Security Services',
        'table' => 'cms_page_defensive_security_services_items',
        'source' => 'resources/views/pages/defensive-security-services.blade.php',
        'parent' => 'page_defensive_security_services',
        'repeatable' => true,
        'fields' => [
            'route' => [
                'label' => 'Route',
                'type' => 'text',
            ],
            'image' => [
                'label' => 'Image',
                'type' => 'image',
            ],
            'imageAlt' => [
                'label' => 'Imagealt',
                'type' => 'text',
            ],
            'lead' => [
                'label' => 'Lead',
                'type' => 'text',
            ],
            'points' => [
                'label' => 'Points',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home' => [
        'title' => 'Legacy Pages Home',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — THREAT INTELLIGENCE · MANAGED SOC · OFFENSIVE SECURITY',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Smarter Intelligence.',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Stronger Security.',
                'type' => 'text',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'link_url_2' => [
                'label' => 'Link Url 2',
                'type' => 'url',
            ],
            'link_label_2' => [
                'label' => 'Link Label — Explore Services',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Join our cyber defense eco-system with',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — hundreds',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — of organizations',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — CYBERLOG // LIVE THREAT FEED',
                'type' => 'text',
            ],
            'label_7' => [
                'label' => 'Label — 00:00:01',
                'type' => 'text',
            ],
            'label_8' => [
                'label' => 'Label — [CLEAN]',
                'type' => 'text',
            ],
            'label_9' => [
                'label' => 'Label — endpoint scan · 1,204 assets',
                'type' => 'text',
            ],
            'label_10' => [
                'label' => 'Label — 00:00:00',
                'type' => 'text',
            ],
            'label_11' => [
                'label' => 'Label — [BLOCKED]',
                'type' => 'text',
            ],
            'label_12' => [
                'label' => 'Label — brute-force attempt · 203.0.113.*',
                'type' => 'text',
            ],
            'div_data_count_3' => [
                'label' => 'Div Data Count 3',
                'type' => 'number',
            ],
            'div_data_suffix_3' => [
                'label' => 'Div Data Suffix 3',
                'type' => 'text',
            ],
            'div_text_6' => [
                'label' => 'Div Text — 99.9%',
                'type' => 'text',
            ],
            'div_text_7' => [
                'label' => 'Div Text — Uptime SLA',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — How we work',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Our Engagement Process',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — A structured, repeatable methodology that takes you from risk dis',
                'type' => 'text',
            ],
            'paragraph_6' => [
                'label' => 'Paragraph — What we do',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Explore Our Security Solutions',
                'type' => 'text',
            ],
            'icon_6' => [
                'label' => 'Icon 6',
                'type' => 'icon',
            ],
            'label_13' => [
                'label' => 'Label — Learn More',
                'type' => 'text',
            ],
            'icon_7' => [
                'label' => 'Icon 7',
                'type' => 'icon',
            ],
            'paragraph_7' => [
                'label' => 'Paragraph — Proven impact',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — Client Success Stories',
                'type' => 'text',
            ],
            'icon_8' => [
                'label' => 'Icon 8',
                'type' => 'icon',
            ],
            'paragraph_8' => [
                'label' => 'Paragraph — Our Story',
                'type' => 'text',
            ],
            'heading_5' => [
                'label' => 'Heading — A decade of building cyber resilience',
                'type' => 'text',
            ],
            'paragraph_9' => [
                'label' => 'Paragraph — Cyberlog helps organizations strengthen their cyber resilience th',
                'type' => 'textarea',
            ],
            'paragraph_10' => [
                'label' => 'Paragraph — From a focused security team to a full-spectrum cyber defense par',
                'type' => 'text',
            ],
            'link_url_3' => [
                'label' => 'Link Url 3',
                'type' => 'url',
            ],
            'link_label_3' => [
                'label' => 'Link Label — Read Our Story',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_step_items' => [
        'title' => 'Step Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_step_items',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'no' => [
                'label' => 'No',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'desc' => [
                'label' => 'Desc',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_sol_items' => [
        'title' => 'Sol Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_sol_items',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'route' => [
                'label' => 'Route',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'desc' => [
                'label' => 'Desc',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_case_items' => [
        'title' => 'Case Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_case_items',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'tag' => [
                'label' => 'Tag',
                'type' => 'text',
            ],
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'desc' => [
                'label' => 'Desc',
                'type' => 'textarea',
            ],
            'stats' => [
                'label' => 'Stats',
                'type' => 'list',
                'item' => [
                    'type' => 'object',
                    'label' => 'Statistic',
                    'fields' => [
                        '0' => [
                            'label' => 'Value',
                            'type' => 'text',
                        ],
                        '1' => [
                            'label' => 'Label',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_m_items' => [
        'title' => 'M Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_m_items',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_it_audit' => [
        'title' => 'Page It Audit',
        'group' => 'It Audit',
        'table' => 'cms_page_it_audit',
        'source' => 'resources/views/pages/it-audit.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — IT Security Audit & ISO/IEC 27001',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Strengthen Security Controls and',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Prepare for Compliance',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog helps organizations review IT systems, identify security',
                'type' => 'text',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'source_media' => [
                'label' => 'Source Media',
                'type' => 'video',
            ],
            'video_text' => [
                'label' => 'Video Text — Your browser does not support the video tag.',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Importance',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Why Your Organization Needs ISO 27001',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — Our Approach',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — The ISO 27001 Readiness Journey',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'page_it_audit_v_items' => [
        'title' => 'V Items',
        'group' => 'It Audit',
        'table' => 'cms_page_it_audit_v_items',
        'source' => 'resources/views/pages/it-audit.blade.php',
        'parent' => 'page_it_audit',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_it_audit_step_items' => [
        'title' => 'Step Items',
        'group' => 'It Audit',
        'table' => 'cms_page_it_audit_step_items',
        'source' => 'resources/views/pages/it-audit.blade.php',
        'parent' => 'page_it_audit',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'page_offensive_security_services' => [
        'title' => 'Page Offensive Security Services',
        'group' => 'Offensive Security Services',
        'table' => 'cms_page_offensive_security_services',
        'source' => 'resources/views/pages/offensive-security-services.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'eyebrow' => [
                'label' => 'Eyebrow',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'summary' => [
                'label' => 'Summary',
                'type' => 'textarea',
            ],
            'hero_icon' => [
                'label' => 'Hero Icon',
                'type' => 'icon',
            ],
            'hero_image' => [
                'label' => 'Hero Image',
                'type' => 'image',
            ],
            'hero_image_alt' => [
                'label' => 'Hero Image Alt',
                'type' => 'text',
            ],
            'cta_title' => [
                'label' => 'Cta Title',
                'type' => 'text',
            ],
            'cta_text' => [
                'label' => 'Cta Text',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_offensive_security_services_items' => [
        'title' => 'Items',
        'group' => 'Offensive Security Services',
        'table' => 'cms_page_offensive_security_services_items',
        'source' => 'resources/views/pages/offensive-security-services.blade.php',
        'parent' => 'page_offensive_security_services',
        'repeatable' => true,
        'fields' => [
            'route' => [
                'label' => 'Route',
                'type' => 'text',
            ],
            'image' => [
                'label' => 'Image',
                'type' => 'image',
            ],
            'imageAlt' => [
                'label' => 'Imagealt',
                'type' => 'text',
            ],
            'lead' => [
                'label' => 'Lead',
                'type' => 'text',
            ],
            'points' => [
                'label' => 'Points',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'page_our_team' => [
        'title' => 'Team page headings',
        'group' => 'Our Team',
        'table' => 'cms_page_our_team',
        'source' => 'resources/views/pages/our-team.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Leadership',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Meet the',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Leadership',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Our Teams',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Built to',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Attack, Defend & Innovate',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Our specialists work across offensive security, defensive operati',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_our_team_team' => [
        'title' => 'Leadership profiles',
        'group' => 'Our Team',
        'table' => 'cms_page_our_team_team',
        'source' => 'resources/views/pages/our-team.blade.php',
        'parent' => 'page_our_team',
        'repeatable' => true,
        'fields' => [
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'role' => [
                'label' => 'Role',
                'type' => 'text',
            ],
            'photo' => [
                'label' => 'Photo',
                'type' => 'image',
            ],
            'width' => [
                'label' => 'Width',
                'type' => 'number',
            ],
            'height' => [
                'label' => 'Height',
                'type' => 'number',
            ],
            'bio' => [
                'label' => 'Bio',
                'type' => 'textarea',
            ],
            'social' => [
                'label' => 'SOCial',
                'type' => 'object',
                'fields' => [
                    'facebook' => [
                        'label' => 'Facebook',
                        'type' => 'url',
                    ],
                    'linkedin' => [
                        'label' => 'Linkedin',
                        'type' => 'url',
                    ],
                ],
            ],
        ],
        'shape' => 'object',
    ],
    'shared_security_service_group' => [
        'title' => 'Shared Security Service Group',
        'group' => 'Shared content',
        'table' => 'cms_shared_security_service_group',
        'source' => 'resources/views/pages/partials/security-service-group.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'page_services' => [
        'title' => 'Page Services',
        'group' => 'Services',
        'table' => 'cms_page_services',
        'source' => 'resources/views/pages/services.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'group_routes' => [
                'label' => 'Group Routes',
                'type' => 'object',
                'fields' => [
                    'offensive' => [
                        'label' => 'Offensive',
                        'type' => 'text',
                    ],
                    'defensive' => [
                        'label' => 'Defensive',
                        'type' => 'text',
                    ],
                ],
            ],
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Security Solutions',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Explore Our',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Security Solutions',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Learn More',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_soc' => [
        'title' => 'Legacy Pages SOC',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'eyebrow' => [
                'label' => 'Eyebrow',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading',
                'type' => 'richtext',
            ],
            'subheading' => [
                'label' => 'Subheading',
                'type' => 'textarea',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label 2',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'hero_icon' => [
                'label' => 'Hero Icon',
                'type' => 'icon',
            ],
            'hero_caption' => [
                'label' => 'Hero Caption',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Comparison',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Which SOC Model Delivers Real Value?',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — We compared four SOC models for a typical mid-sized business (500',
                'type' => 'textarea',
            ],
            'th_text' => [
                'label' => 'Th Text — SOC Model',
                'type' => 'text',
            ],
            'th_text_2' => [
                'label' => 'Th Text — Estimated Yearly Cost (USD)',
                'type' => 'text',
            ],
            'th_text_3' => [
                'label' => 'Th Text — Setup Time',
                'type' => 'text',
            ],
            'th_text_4' => [
                'label' => 'Th Text — MTTR (hours)',
                'type' => 'text',
            ],
            'th_text_5' => [
                'label' => 'Th Text — % Threats Stopped Before Damage',
                'type' => 'text',
            ],
            'th_text_6' => [
                'label' => 'Th Text — SLA / KPI Score',
                'type' => 'text',
            ],
            'td_text_19' => [
                'label' => 'Td Text — Cyberlog SOCaaS',
                'type' => 'text',
            ],
            'td_text_20' => [
                'label' => 'Td Text — $192,000',
                'type' => 'text',
            ],
            'td_text_21' => [
                'label' => 'Td Text — 1 week',
                'type' => 'text',
            ],
            'td_text_22' => [
                'label' => 'Td Text — 0.5',
                'type' => 'text',
            ],
            'td_text_23' => [
                'label' => 'Td Text — 96%',
                'type' => 'text',
            ],
            'td_text_24' => [
                'label' => 'Td Text — 99.9%',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — SOC as a Service',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Calculate Your SOC Cost',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — The average managed SOC service ranges from $10 to $20 per asset ',
                'type' => 'textarea',
            ],
            'h5_text' => [
                'label' => 'H5 Text — Calculate your SOC cost',
                'type' => 'text',
            ],
            'label_text_3' => [
                'label' => 'Label Text — Security tools in use',
                'type' => 'text',
            ],
            'input_placeholder' => [
                'label' => 'Input Placeholder',
                'type' => 'text',
            ],
            'label_text_4' => [
                'label' => 'Label Text — Business email',
                'type' => 'text',
            ],
            'input_placeholder_2' => [
                'label' => 'Input Placeholder 2',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Get a Custom Quote',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — Coverage Matrix',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — What\'s Included in Each Tier',
                'type' => 'text',
            ],
            'th_text_7' => [
                'label' => 'Th Text — Capability',
                'type' => 'text',
            ],
            'th_text_8' => [
                'label' => 'Th Text — Essential',
                'type' => 'text',
            ],
            'th_text_9' => [
                'label' => 'Th Text — Advanced',
                'type' => 'text',
            ],
            'th_text_10' => [
                'label' => 'Th Text — Enterprise',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'paragraph_6' => [
                'label' => 'Paragraph — Cyberlog SOC as a Service',
                'type' => 'text',
            ],
            'heading_5' => [
                'label' => 'Heading — Benefits',
                'type' => 'text',
            ],
            'paragraph_7' => [
                'label' => 'Paragraph — New System Sensor',
                'type' => 'text',
            ],
            'heading_6' => [
                'label' => 'Heading — Continuous Telemetry, Everywhere',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
            'paragraph_8' => [
                'label' => 'Paragraph — Pricing',
                'type' => 'text',
            ],
            'heading_7' => [
                'label' => 'Heading — Custom SOC Plans',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — Most Popular',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — Custom',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Get a Quote',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_soc_row_items' => [
        'title' => 'Legacy Pages SOC Row Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_row_items',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'boolean',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'boolean',
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_soc_b_items' => [
        'title' => 'Legacy Pages SOC B Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_b_items',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_soc_s_items' => [
        'title' => 'Legacy Pages SOC S Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_s_items',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_soc_plan_items' => [
        'title' => 'Legacy Pages SOC Plan Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_plan_items',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vapt' => [
        'title' => 'Legacy Pages VAPT',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vapt',
        'source' => 'resources/views/pages/vapt.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'eyebrow' => [
                'label' => 'Eyebrow',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading',
                'type' => 'richtext',
            ],
            'subheading' => [
                'label' => 'Subheading',
                'type' => 'textarea',
            ],
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'hero_icon' => [
                'label' => 'Hero Icon',
                'type' => 'icon',
            ],
            'hero_caption' => [
                'label' => 'Hero Caption',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Methodology',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Our Security Posture Assessment',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — A 360° review of your attack surface, mapped to industry standard',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — Pen Test Scoping',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Calculate Your VAPT Cost',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — Pen test pricing depends on scope — number of applications, IPs, ',
                'type' => 'textarea',
            ],
            'h5_text' => [
                'label' => 'H5 Text — Scope your assessment',
                'type' => 'text',
            ],
            'label_text' => [
                'label' => 'Label Text — Test type',
                'type' => 'text',
            ],
            'option_text' => [
                'label' => 'Option Text — Web Application',
                'type' => 'text',
            ],
            'option_text_2' => [
                'label' => 'Option Text — Network / Infrastructure',
                'type' => 'text',
            ],
            'option_text_3' => [
                'label' => 'Option Text — Mobile App',
                'type' => 'text',
            ],
            'option_text_4' => [
                'label' => 'Option Text — API',
                'type' => 'text',
            ],
            'option_text_5' => [
                'label' => 'Option Text — Cloud',
                'type' => 'text',
            ],
            'label_text_2' => [
                'label' => 'Label Text — Testing approach',
                'type' => 'text',
            ],
            'option_text_6' => [
                'label' => 'Option Text — Black Box',
                'type' => 'text',
            ],
            'option_text_7' => [
                'label' => 'Option Text — Grey Box',
                'type' => 'text',
            ],
            'option_text_8' => [
                'label' => 'Option Text — White Box',
                'type' => 'text',
            ],
            'label_text_3' => [
                'label' => 'Label Text — Number of targets / assets',
                'type' => 'text',
            ],
            'input_placeholder' => [
                'label' => 'Input Placeholder',
                'type' => 'text',
            ],
            'label_text_4' => [
                'label' => 'Label Text — Business email',
                'type' => 'text',
            ],
            'input_placeholder_2' => [
                'label' => 'Input Placeholder 2',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Get a Custom Quote',
                'type' => 'text',
            ],
            'paragraph_5' => [
                'label' => 'Paragraph — Coverage Matrix',
                'type' => 'text',
            ],
            'heading_4' => [
                'label' => 'Heading — What Each Engagement Covers',
                'type' => 'text',
            ],
            'th_text' => [
                'label' => 'Th Text — Coverage',
                'type' => 'text',
            ],
            'th_text_2' => [
                'label' => 'Th Text — Standard',
                'type' => 'text',
            ],
            'th_text_3' => [
                'label' => 'Th Text — Advanced',
                'type' => 'text',
            ],
            'th_text_4' => [
                'label' => 'Th Text — Red Team',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'paragraph_6' => [
                'label' => 'Paragraph — Testing Approaches',
                'type' => 'text',
            ],
            'heading_5' => [
                'label' => 'Heading — Black, Grey & White Box',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'h4_text' => [
                'label' => 'H4 Text — Black Box',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Conditions:',
                'type' => 'text',
            ],
            'paragraph_7' => [
                'label' => 'Paragraph — We try to penetrate the system and identify ways to harm your bus',
                'type' => 'text',
            ],
            'label_3' => [
                'label' => 'Label — Value:',
                'type' => 'text',
            ],
            'paragraph_8' => [
                'label' => 'Paragraph — Simulates a real-world external attacker and identifies technical',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'h4_text_2' => [
                'label' => 'H4 Text — Grey Box',
                'type' => 'text',
            ],
            'label_4' => [
                'label' => 'Label — Conditions:',
                'type' => 'text',
            ],
            'paragraph_9' => [
                'label' => 'Paragraph — We attack your business with general information about your infra',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — Value:',
                'type' => 'text',
            ],
            'paragraph_10' => [
                'label' => 'Paragraph — The golden mean between quality and price — cheaper and faster th',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'h4_text_3' => [
                'label' => 'H4 Text — White Box',
                'type' => 'text',
            ],
            'label_6' => [
                'label' => 'Label — Conditions:',
                'type' => 'text',
            ],
            'paragraph_11' => [
                'label' => 'Paragraph — We try to hack your organization with full knowledge of logins, p',
                'type' => 'text',
            ],
            'label_7' => [
                'label' => 'Label — Value:',
                'type' => 'text',
            ],
            'paragraph_12' => [
                'label' => 'Paragraph — Uncovers hidden vulnerabilities that may go unnoticed in other ty',
                'type' => 'text',
            ],
            'paragraph_13' => [
                'label' => 'Paragraph — Why Cyberlog VAPT',
                'type' => 'text',
            ],
            'heading_6' => [
                'label' => 'Heading — Benefits',
                'type' => 'text',
            ],
            'label_8' => [
                'label' => 'Label — Financial Institute',
                'type' => 'text',
            ],
            'heading_7' => [
                'label' => 'Heading — Bangladesh Finance',
                'type' => 'text',
            ],
            'paragraph_14' => [
                'label' => 'Paragraph — Cyberlog conducted VAPT for Bangladesh Finance to identify, valid',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_vapt_p_items' => [
        'title' => 'Legacy Pages VAPT P Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vapt_p_items',
        'source' => 'resources/views/pages/vapt.blade.php',
        'parent' => 'legacy_pages_vapt',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vapt_row_items' => [
        'title' => 'Legacy Pages VAPT Row Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vapt_row_items',
        'source' => 'resources/views/pages/vapt.blade.php',
        'parent' => 'legacy_pages_vapt',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'boolean',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'boolean',
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vapt_b_items' => [
        'title' => 'Legacy Pages VAPT B Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vapt_b_items',
        'source' => 'resources/views/pages/vapt.blade.php',
        'parent' => 'legacy_pages_vapt',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vciso' => [
        'title' => 'Legacy Pages vCISO',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vciso',
        'source' => 'resources/views/pages/vciso.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Virtual CISO',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Executive Security Leadership,',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — On Demand',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Cyberlog\'s vCISO gives you board-level security strategy, governa',
                'type' => 'textarea',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to a vCISO',
                'type' => 'text',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'link_label_2' => [
                'label' => 'Link Label — See Capabilities',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'div_text' => [
                'label' => 'Div Text — vCISO Core',
                'type' => 'text',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — What Your vCISO Owns',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Governance, Strategy & Resilience',
                'type' => 'text',
            ],
            'title_2' => [
                'label' => 'Title 2',
                'type' => 'text',
            ],
            'text' => [
                'label' => 'Text',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_vciso_cap_items' => [
        'title' => 'Legacy Pages vCISO Cap Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vciso_cap_items',
        'source' => 'resources/views/pages/vciso.blade.php',
        'parent' => 'legacy_pages_vciso',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vciso_cap_items_2' => [
        'title' => 'Legacy Pages vCISO Cap Items 2',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vciso_cap_items_2',
        'source' => 'resources/views/pages/vciso.blade.php',
        'parent' => 'legacy_pages_vciso',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'legacy_pages_vciso_c_items' => [
        'title' => 'Legacy Pages vCISO C Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vciso_c_items',
        'source' => 'resources/views/pages/vciso.blade.php',
        'parent' => 'legacy_pages_vciso',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'shared_about_industries_clients' => [
        'title' => 'Shared About Industries Clients',
        'group' => 'Shared content',
        'table' => 'cms_shared_about_industries_clients',
        'source' => 'resources/views/partials/about-industries-clients.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — Our Reach',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Industries We Protect',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Organizations',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Trusted By',
                'type' => 'text',
            ],
            'client_link_aria_label' => [
                'label' => 'Client link label (screen readers; followed by the client name) — Visit',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_about_industries_clients_about_industries' => [
        'title' => 'Industry statistics',
        'group' => 'Shared content',
        'table' => 'cms_shared_about_industries_clients_about_industries',
        'source' => 'resources/views/partials/about-industries-clients.blade.php',
        'parent' => 'shared_about_industries_clients',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'icon',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'text',
            ],
        ],
        'shape' => 'tuple',
    ],
    'shared_about_industries_clients_about_clients' => [
        'title' => 'Trusted organizations',
        'group' => 'Shared content',
        'table' => 'cms_shared_about_industries_clients_about_clients',
        'source' => 'resources/views/partials/about-industries-clients.blade.php',
        'parent' => 'shared_about_industries_clients',
        'repeatable' => true,
        'fields' => [
            'item_0' => [
                'label' => 'Item 0',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Item 1',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Item 2',
                'type' => 'image',
            ],
            'item_3' => [
                'label' => 'Item 3',
                'type' => 'url',
            ],
        ],
        'shape' => 'tuple',
    ],
    'shared_clients' => [
        'title' => 'Client section headings',
        'group' => 'Shared content',
        'table' => 'cms_shared_clients',
        'source' => 'resources/views/partials/clients.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — We\'re Working With',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Our',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — Clients',
                'type' => 'text',
            ],
            'button_aria_label' => [
                'label' => 'Button Aria Label',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'button_aria_label_2' => [
                'label' => 'Button Aria Label 2',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'dot_aria_label' => [
                'label' => 'Carousel dot label (screen readers; followed by the client name) — Show',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_clients_clients' => [
        'title' => 'Client logos',
        'group' => 'Shared content',
        'table' => 'cms_shared_clients_clients',
        'source' => 'resources/views/partials/clients.blade.php',
        'parent' => 'shared_clients',
        'repeatable' => true,
        'fields' => [
            'name' => [
                'label' => 'Name',
                'type' => 'text',
            ],
            'sector' => [
                'label' => 'Sector',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Url',
                'type' => 'url',
            ],
            'logo' => [
                'label' => 'Logo',
                'type' => 'image',
            ],
            'light_background' => [
                'label' => 'Light background behind logo (for dark logos)',
                'type' => 'boolean',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_navbar' => [
        'title' => 'Shared Navbar',
        'group' => 'Archived layouts',
        'table' => 'cms_shared_navbar',
        'source' => 'resources/views/partials/navbar.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_label' => [
                'label' => 'Link Label — Cyber',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — log',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Menu',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'link_url_2' => [
                'label' => 'Link Url 2',
                'type' => 'url',
            ],
            'link_label_2' => [
                'label' => 'Link Label — Home',
                'type' => 'text',
            ],
            'a_href' => [
                'label' => 'A Href',
                'type' => 'url',
            ],
            'link_label_3' => [
                'label' => 'Link Label — Services',
                'type' => 'text',
            ],
            'link_label_4' => [
                'label' => 'Link Label — Prohoree 365',
                'type' => 'text',
            ],
            'link_label_5' => [
                'label' => 'Link Label — About Us',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'link_label_6' => [
                'label' => 'Link Label — Client Login',
                'type' => 'text',
            ],
            'link_label_7' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
            'destination' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
            'destination_2' => [
                'label' => 'Destination 2',
                'type' => 'url',
            ],
            'destination_3' => [
                'label' => 'Destination 3',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_navbar_service_links' => [
        'title' => 'Service Links',
        'group' => 'Archived layouts',
        'table' => 'cms_shared_navbar_service_links',
        'source' => 'resources/views/partials/navbar.blade.php',
        'parent' => 'shared_navbar',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'pub' => [
                'label' => 'Pub',
                'type' => 'text',
            ],
            'legacy' => [
                'label' => 'Legacy',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_navbar_service_route_names' => [
        'title' => 'Service Route Names',
        'group' => 'Archived layouts',
        'table' => 'cms_shared_navbar_service_route_names',
        'source' => 'resources/views/partials/navbar.blade.php',
        'parent' => 'shared_navbar',
        'repeatable' => true,
        'fields' => [
            'value' => [
                'label' => 'Value',
                'type' => 'text',
            ],
        ],
        'shape' => 'scalar',
    ],
    'shared_page_hero' => [
        'title' => 'Shared Page Hero',
        'group' => 'Shared content',
        'table' => 'cms_shared_page_hero',
        'source' => 'resources/views/partials/page-hero.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'default_text' => [
                'label' => 'Default Text',
                'type' => 'text',
            ],
            'default_text_2' => [
                'label' => 'Default Text 2',
                'type' => 'text',
            ],
            'default_hero_icon' => [
                'label' => 'Default hero illustration icon',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_reviews' => [
        'title' => 'Shared Reviews',
        'group' => 'Archived layouts',
        'table' => 'cms_shared_reviews',
        'source' => 'resources/views/partials/reviews.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — CLIENT FEEDBACK',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Our customers',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — say it best',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — Recognized by clients for practical security delivery, clear repo',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'paragraph_3' => [
                'label' => 'Paragraph — “',
                'type' => 'text',
            ],
            'paragraph_4' => [
                'label' => 'Paragraph — ”',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_reviews_reviews' => [
        'title' => 'Reviews',
        'group' => 'Archived layouts',
        'table' => 'cms_shared_reviews_reviews',
        'source' => 'resources/views/partials/reviews.blade.php',
        'parent' => 'shared_reviews',
        'repeatable' => true,
        'fields' => [
            'source' => [
                'label' => 'Source',
                'type' => 'text',
            ],
            'sourceKey' => [
                'label' => 'Sourcekey',
                'type' => 'text',
            ],
            'logo' => [
                'label' => 'Logo',
                'type' => 'image',
            ],
            'award' => [
                'label' => 'Award',
                'type' => 'text',
            ],
            'rating' => [
                'label' => 'Rating',
                'type' => 'text',
            ],
            'quote' => [
                'label' => 'Quote',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'shared_talk_to_expert' => [
        'title' => 'Shared Talk To Expert',
        'group' => 'Shared content',
        'table' => 'cms_shared_talk_to_expert',
        'source' => 'resources/views/partials/talk-to-expert.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'default_text' => [
                'label' => 'Default Text',
                'type' => 'text',
            ],
            'default_text_2' => [
                'label' => 'Default Text 2',
                'type' => 'text',
            ],
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Talk to an Expert',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_portfolio_index' => [
        'title' => 'Legacy Portfolio Index',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_portfolio_index',
        'source' => 'resources/views/portfolio/index.blade.php',
        'parent' => null,
        'repeatable' => false,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Smarter Intelligence. Stronger Security.',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Join our Cyber Defense eco-system with',
                'type' => 'text',
            ],
            'label_5' => [
                'label' => 'Label — hundreds',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — of other organizations!',
                'type' => 'text',
            ],
            'heading_2' => [
                'label' => 'Heading — Explore Our Security Solutions',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'h4_text_6' => [
                'label' => 'H4 Text — vCISO',
                'type' => 'text',
            ],
            'paragraph_8' => [
                'label' => 'Paragraph — Virtual CISO support for governance, compliance, strategy, and cy',
                'type' => 'text',
            ],
            'heading_3' => [
                'label' => 'Heading — Trusted Clients',
                'type' => 'text',
            ],
            'icon_2' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'heading_4' => [
                'label' => 'Heading — Client Success Stories',
                'type' => 'text',
            ],
            'icon_3' => [
                'label' => 'Icon 3',
                'type' => 'icon',
            ],
            'heading_5' => [
                'label' => 'Heading — Our Story',
                'type' => 'text',
            ],
            'icon_4' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'paragraph_13' => [
                'label' => 'Paragraph — Cyberlog helps organizations strengthen their cyber resilience th',
                'type' => 'textarea',
            ],
            'heading_6' => [
                'label' => 'Heading — Contact Cyberlog',
                'type' => 'text',
            ],
            'icon_5' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'input_placeholder' => [
                'label' => 'Input Placeholder',
                'type' => 'text',
            ],
            'label_text' => [
                'label' => 'Label Text — Full name',
                'type' => 'text',
            ],
            'input_placeholder_2' => [
                'label' => 'Input Placeholder 2',
                'type' => 'text',
            ],
            'label_text_2' => [
                'label' => 'Label Text — Email address',
                'type' => 'text',
            ],
            'textarea_placeholder' => [
                'label' => 'Textarea Placeholder',
                'type' => 'text',
            ],
            'label_text_3' => [
                'label' => 'Label Text — Message',
                'type' => 'text',
            ],
            'button_label' => [
                'label' => 'Button Label — Send Message',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'services' => [
        'title' => 'Service Catalogue',
        'group' => 'Shared content',
        'table' => 'cms_services',
        'source' => 'config/cyberlog_services.php',
        'parent' => null,
        'repeatable' => true,
        'fields' => [
            'title' => [
                'label' => 'Title',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'route' => [
                'label' => 'Route',
                'type' => 'text',
            ],
            'group' => [
                'label' => 'Group',
                'type' => 'text',
            ],
            'kicker' => [
                'label' => 'Kicker',
                'type' => 'text',
            ],
            'desc' => [
                'label' => 'Desc',
                'type' => 'textarea',
            ],
            'tags' => [
                'label' => 'Tags',
                'type' => 'list',
                'item' => [
                    'label' => 'Item',
                    'type' => 'text',
                ],
            ],
            'detail' => [
                'label' => 'Detail',
                'type' => 'object',
                'fields' => [
                    'eyebrow' => [
                        'label' => 'Eyebrow',
                        'type' => 'text',
                    ],
                    'points' => [
                        'label' => 'Points',
                        'type' => 'list',
                        'item' => [
                            'label' => 'Item',
                            'type' => 'text',
                        ],
                    ],
                ],
            ],
            'url' => [
                'label' => 'Custom destination (optional)',
                'type' => 'url',
            ],
        ],
        'shape' => 'object',
    ],
    'page_ai_automation_cards' => [
        'title' => 'AI capability cards',
        'group' => 'AI Automation',
        'table' => 'cms_page_ai_automation_cards',
        'source' => 'resources/views/frontend/public/ai-automation.blade.php',
        'parent' => 'page_ai_automation',
        'repeatable' => true,
        'fields' => [
            'img_media' => [
                'label' => 'Img Media',
                'type' => 'image',
            ],
            'heading' => [
                'label' => 'Heading — Smart City Chuadanga',
                'type' => 'text',
            ],
            'div_aria_label' => [
                'label' => 'Div Aria Label',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon 7',
                'type' => 'icon',
            ],
            'icon_2' => [
                'label' => 'Icon 8',
                'type' => 'icon',
            ],
            'icon_3' => [
                'label' => 'Icon 9',
                'type' => 'icon',
            ],
            'icon_4' => [
                'label' => 'Icon 10',
                'type' => 'icon',
            ],
            'icon_5' => [
                'label' => 'Icon 11',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — 5.0',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — “Cyberlog helped us digitize and automate our city service workfl',
                'type' => 'textarea',
            ],
        ],
        'shape' => 'object',
    ],
    'page_ai_automation_cards_2' => [
        'title' => 'AI case studies',
        'group' => 'AI Automation',
        'table' => 'cms_page_ai_automation_cards_2',
        'source' => 'resources/views/frontend/public/ai-automation.blade.php',
        'parent' => 'page_ai_automation',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'h5_text' => [
                'label' => 'H5 Text — Faster Service Delivery',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Automated workflows dramatically reduce processing time by replac',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_ai_automation_timeline' => [
        'title' => 'AI evolution timeline',
        'group' => 'AI Automation',
        'table' => 'cms_page_ai_automation_timeline',
        'source' => 'resources/views/frontend/public/ai-automation.blade.php',
        'parent' => 'page_ai_automation',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — 2015',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Manual, paper-based processes and disconnected departments',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'footer_wordmark' => [
        'title' => 'Wordmark',
        'group' => 'Shared content',
        'table' => 'cms_footer_wordmark',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => 'footer',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — CYBERL',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'footer_cards' => [
        'title' => 'Social links',
        'group' => 'Shared content',
        'table' => 'cms_footer_cards',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => 'footer',
        'repeatable' => true,
        'fields' => [
            'a_href' => [
                'label' => 'A Href 3',
                'type' => 'url',
            ],
            'a_aria_label' => [
                'label' => 'A Aria Label',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'footer_col_12' => [
        'title' => 'Col 12',
        'group' => 'Shared content',
        'table' => 'cms_footer_col_12',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => 'footer',
        'repeatable' => true,
        'fields' => [
            'link_url' => [
                'label' => 'Link Url',
                'type' => 'url',
            ],
            'link_label' => [
                'label' => 'Link Label — Security Operations Center (SOC)',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_cta_banner_cta2_line' => [
        'title' => 'Cta2 Line',
        'group' => 'Archived layouts',
        'table' => 'cms_home_cta_banner_cta2_line',
        'source' => 'resources/views/frontend/public/partials/home/cta-banner.blade.php',
        'parent' => 'home_cta_banner',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'link_label' => [
                'label' => 'Link Label — Book a Demo',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_defend_dao_stats' => [
        'title' => 'Dao Stats',
        'group' => 'Archived layouts',
        'table' => 'cms_home_defend_dao_stats',
        'source' => 'resources/views/frontend/public/partials/home/defend.blade.php',
        'parent' => 'home_defend',
        'repeatable' => true,
        'fields' => [
            'div_data_count' => [
                'label' => 'Div Data Count',
                'type' => 'number',
            ],
            'div_text' => [
                'label' => 'Div Text — 45',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — 3rd-party',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_hero_drift' => [
        'title' => 'Floating service chips',
        'group' => 'Home',
        'table' => 'cms_home_hero_drift',
        'source' => 'resources/views/frontend/public/partials/home/hero.blade.php',
        'parent' => 'home_hero',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — Penetration Testing',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_network_clnetcard' => [
        'title' => 'Clnetcard',
        'group' => 'Archived layouts',
        'table' => 'cms_home_network_clnetcard',
        'source' => 'resources/views/frontend/public/partials/home/network.blade.php',
        'parent' => 'home_network',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — 6',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — potential concentration risks found',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_network_net_stats' => [
        'title' => 'Net Stats',
        'group' => 'Archived layouts',
        'table' => 'cms_home_network_net_stats',
        'source' => 'resources/views/frontend/public/partials/home/network.blade.php',
        'parent' => 'home_network',
        'repeatable' => true,
        'fields' => [
            'div_data_count' => [
                'label' => 'Div Data Count',
                'type' => 'number',
            ],
            'div_text' => [
                'label' => 'Div Text — 45',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Endpoints',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_network_net_floats' => [
        'title' => 'Net Floats',
        'group' => 'Archived layouts',
        'table' => 'cms_home_network_net_floats',
        'source' => 'resources/views/frontend/public/partials/home/network.blade.php',
        'parent' => 'home_network',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — Critical risk found',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_our_story_story_stats' => [
        'title' => 'Story Stats',
        'group' => 'Home',
        'table' => 'cms_home_our_story_story_stats',
        'source' => 'resources/views/frontend/public/partials/home/our-story.blade.php',
        'parent' => 'home_our_story',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — 21+',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Enterprise And Government Clients',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_tech_diagram_process_stage_grid' => [
        'title' => 'Engagement process steps',
        'group' => 'Home',
        'table' => 'cms_home_tech_diagram_process_stage_grid',
        'source' => 'resources/views/frontend/public/partials/home/tech-diagram.blade.php',
        'parent' => 'home_tech_diagram',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — Step 01',
                'type' => 'text',
            ],
            'heading' => [
                'label' => 'Heading — Understanding Business & Risks',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon 2',
                'type' => 'icon',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Scope & Goals',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'home_threats_th_floats' => [
        'title' => 'Th Floats',
        'group' => 'Archived layouts',
        'table' => 'cms_home_threats_th_floats',
        'source' => 'resources/views/frontend/public/partials/home/threats.blade.php',
        'parent' => 'home_threats',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — Client is remediating',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_expert_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_soc_expert_links',
        'source' => 'resources/views/frontend/public/partials/soc/expert.blade.php',
        'parent' => 'soc_expert',
        'repeatable' => true,
        'fields' => [
            'input_placeholder' => [
                'label' => 'Input Placeholder',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_hero_soc_log' => [
        'title' => 'Soc Log',
        'group' => 'SOC',
        'table' => 'cms_soc_hero_soc_log',
        'source' => 'resources/views/frontend/public/partials/soc/hero.blade.php',
        'parent' => 'soc_hero',
        'repeatable' => true,
        'fields' => [
            'paragraph' => [
                'label' => 'Paragraph — 13:15:50',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — [VERIFIED]',
                'type' => 'text',
            ],
            'paragraph_2' => [
                'label' => 'Paragraph — MFA challenge - success',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'soc_numbers_cards' => [
        'title' => 'Cards',
        'group' => 'SOC',
        'table' => 'cms_soc_numbers_cards',
        'source' => 'resources/views/frontend/public/partials/soc/numbers.blade.php',
        'parent' => 'soc_numbers',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — 01',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — #1',
                'type' => 'text',
            ],
            'div_text_3' => [
                'label' => 'Div Text — SOC provider in Bangladesh for government & enterprise-grade thre',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_hero_vapt_logs' => [
        'title' => 'Vapt Logs',
        'group' => 'VAPT',
        'table' => 'cms_vapt_hero_vapt_logs',
        'source' => 'resources/views/frontend/public/partials/vapt/hero.blade.php',
        'parent' => 'vapt_hero',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — [VALIDATED]',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — SQL injection impact confirmed',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_numbers_vapt_number_grid' => [
        'title' => 'Vapt Number Grid',
        'group' => 'VAPT',
        'table' => 'cms_vapt_numbers_vapt_number_grid',
        'source' => 'resources/views/frontend/public/partials/vapt/numbers.blade.php',
        'parent' => 'vapt_numbers',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — 160+',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Tests annually',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'vapt_success_vapt_success_stats' => [
        'title' => 'Stats',
        'group' => 'Archived layouts',
        'table' => 'cms_vapt_success_vapt_success_stats',
        'source' => 'resources/views/frontend/public/partials/vapt/success.blade.php',
        'parent' => 'vapt_success',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — 360',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — Security risk review',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_capacity_building_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_page_capacity_building_links',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => 'page_capacity_building',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon 5',
                'type' => 'icon',
            ],
            'list_text' => [
                'label' => 'List Text — Department-specific training tracks and reporting',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_capacity_building_links_2' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_page_capacity_building_links_2',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => 'page_capacity_building',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'list_text' => [
                'label' => 'List Text — Simple, fast setup',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_contact_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_page_contact_links',
        'source' => 'resources/views/pages/contact.blade.php',
        'parent' => 'page_contact',
        'repeatable' => true,
        'fields' => [
            'input_placeholder' => [
                'label' => 'Input Placeholder',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_contact_cards' => [
        'title' => 'Contact social links',
        'group' => 'Contact',
        'table' => 'cms_page_contact_cards',
        'source' => 'resources/views/pages/contact.blade.php',
        'parent' => 'page_contact',
        'repeatable' => true,
        'fields' => [
            'a_href' => [
                'label' => 'A Href 2',
                'type' => 'url',
            ],
            'a_aria_label' => [
                'label' => 'A Aria Label',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon 4',
                'type' => 'icon',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_console_stats' => [
        'title' => 'Console Stats',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_console_stats',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'div_data_count' => [
                'label' => 'Div Data Count',
                'type' => 'number',
            ],
            'div_data_suffix' => [
                'label' => 'Div Data Suffix',
                'type' => 'text',
            ],
            'div_text' => [
                'label' => 'Div Text — 500+',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Users protected',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_home_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_home_links',
        'source' => 'resources/views/pages/home.blade.php',
        'parent' => 'legacy_pages_home',
        'repeatable' => true,
        'fields' => [
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'label' => [
                'label' => 'Label — Penetration Testing',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'page_it_audit_links' => [
        'title' => 'Links',
        'group' => 'It Audit',
        'table' => 'cms_page_it_audit_links',
        'source' => 'resources/views/pages/it-audit.blade.php',
        'parent' => 'page_it_audit',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — 93',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Annex A Controls Reviewed',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_soc_cards' => [
        'title' => 'Cards',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_cards',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'label_text' => [
                'label' => 'Label Text — Number of employees',
                'type' => 'text',
            ],
            'option_text' => [
                'label' => 'Option Text — 1 - 100',
                'type' => 'text',
            ],
            'option_text_2' => [
                'label' => 'Option Text — 100 - 500',
                'type' => 'text',
            ],
            'option_text_3' => [
                'label' => 'Option Text — 500 - 1000',
                'type' => 'text',
            ],
            'option_text_4' => [
                'label' => 'Option Text — 1000+',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_soc_tr_items' => [
        'title' => 'Tr Items',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_soc_tr_items',
        'source' => 'resources/views/pages/soc.blade.php',
        'parent' => 'legacy_pages_soc',
        'repeatable' => true,
        'fields' => [
            'td_text' => [
                'label' => 'Td Text — In-House SOC',
                'type' => 'text',
            ],
            'td_text_2' => [
                'label' => 'Td Text — $750,000',
                'type' => 'text',
            ],
            'td_text_3' => [
                'label' => 'Td Text — 6 months',
                'type' => 'text',
            ],
            'td_text_4' => [
                'label' => 'Td Text — 4.0',
                'type' => 'text',
            ],
            'td_text_5' => [
                'label' => 'Td Text — 70%',
                'type' => 'text',
            ],
            'td_text_6' => [
                'label' => 'Td Text — 70%',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_pages_vapt_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_pages_vapt_links',
        'source' => 'resources/views/pages/vapt.blade.php',
        'parent' => 'legacy_pages_vapt',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — 360°',
                'type' => 'text',
            ],
            'div_text_2' => [
                'label' => 'Div Text — Security Risk Review',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_portfolio_index_cards' => [
        'title' => 'Cards',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_portfolio_index_cards',
        'source' => 'resources/views/portfolio/index.blade.php',
        'parent' => 'legacy_portfolio_index',
        'repeatable' => true,
        'fields' => [
            'h4_text' => [
                'label' => 'H4 Text — Dhaka Stock Exchange',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — Cyberlog delivered SOC support for Bangladesh’s most critical cap',
                'type' => 'text',
            ],
            'label' => [
                'label' => 'Label — 24/7 SOC Monitoring',
                'type' => 'text',
            ],
            'label_2' => [
                'label' => 'Label — 99.99% uptime for Capital Market Cyber Defense',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_portfolio_index_links' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_portfolio_index_links',
        'source' => 'resources/views/portfolio/index.blade.php',
        'parent' => 'legacy_portfolio_index',
        'repeatable' => true,
        'fields' => [
            'div_text' => [
                'label' => 'Div Text — Aspire to Innovate, a2i',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_portfolio_index_links_2' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_portfolio_index_links_2',
        'source' => 'resources/views/portfolio/index.blade.php',
        'parent' => 'legacy_portfolio_index',
        'repeatable' => true,
        'fields' => [
            'h4_text' => [
                'label' => 'H4 Text — SOC',
                'type' => 'text',
            ],
            'paragraph' => [
                'label' => 'Paragraph — 24/7 monitoring, threat detection, and incident response support.',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'legacy_portfolio_index_links_3' => [
        'title' => 'Links',
        'group' => 'Archived layouts',
        'table' => 'cms_legacy_portfolio_index_links_3',
        'source' => 'resources/views/portfolio/index.blade.php',
        'parent' => 'legacy_portfolio_index',
        'repeatable' => true,
        'fields' => [
            'label' => [
                'label' => 'Label — Penetration Testing',
                'type' => 'text',
            ],
        ],
        'shape' => 'object',
    ],
    'threat_feed_events' => [
        'title' => 'Threat feed events',
        'group' => 'Shared content',
        'table' => 'cms_threat_feed_events',
        'fields' => [
            'item_0' => [
                'label' => 'Tone',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Status',
                'type' => 'text',
            ],
            'item_2' => [
                'label' => 'Message',
                'type' => 'text',
            ],
        ],
        'repeatable' => true,
        'shape' => 'tuple',
        'source' => '',
        'parent' => null,
    ],
    'soc_live_events' => [
        'title' => 'SOC live console events',
        'group' => 'SOC',
        'table' => 'cms_soc_live_events',
        'fields' => [
            'item_0' => [
                'label' => 'Status',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Message',
                'type' => 'text',
            ],
        ],
        'repeatable' => true,
        'shape' => 'tuple',
        'source' => '',
        'parent' => null,
    ],
    'vapt_live_events' => [
        'title' => 'VAPT live console events',
        'group' => 'VAPT',
        'table' => 'cms_vapt_live_events',
        'fields' => [
            'item_0' => [
                'label' => 'Status',
                'type' => 'text',
            ],
            'item_1' => [
                'label' => 'Message',
                'type' => 'text',
            ],
        ],
        'repeatable' => true,
        'shape' => 'tuple',
        'source' => 'resources/views/frontend/public/partials/vapt/hero.blade.php',
        'parent' => 'vapt_hero',
    ],
    'team_units' => [
        'title' => 'Specialist teams',
        'group' => 'Our Team',
        'table' => 'cms_team_units',
        'fields' => [
            'title' => [
                'label' => 'Team name',
                'type' => 'text',
            ],
            'subtitle' => [
                'label' => 'Subtitle',
                'type' => 'text',
            ],
            'icon' => [
                'label' => 'Icon',
                'type' => 'icon',
            ],
            'color' => [
                'label' => 'Theme (red, purple, blue, innovation)',
                'type' => 'text',
            ],
            'points' => [
                'type' => 'list',
                'label' => 'Capabilities',
                'item' => [
                    'label' => 'Capability',
                    'type' => 'text',
                ],
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => '',
        'parent' => 'page_our_team',
    ],
    'navigation_company_links' => [
        'title' => 'Company menu',
        'group' => 'Shared content',
        'table' => 'cms_navigation_company_links',
        'fields' => [
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => 'resources/views/frontend/public/partials/nav.blade.php',
        'parent' => 'nav',
    ],
    'navigation_specialized_links' => [
        'title' => 'Specialized service menu',
        'group' => 'Shared content',
        'table' => 'cms_navigation_specialized_links',
        'fields' => [
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => 'resources/views/frontend/public/partials/nav.blade.php',
        'parent' => 'nav',
    ],
    'footer_company_links' => [
        'title' => 'Footer company links',
        'group' => 'Shared content',
        'table' => 'cms_footer_company_links',
        'fields' => [
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => 'footer',
    ],
    'footer_specialized_links' => [
        'title' => 'Footer specialized links',
        'group' => 'Shared content',
        'table' => 'cms_footer_specialized_links',
        'fields' => [
            'label' => [
                'label' => 'Label',
                'type' => 'text',
            ],
            'url' => [
                'label' => 'Destination',
                'type' => 'url',
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => 'resources/views/frontend/public/partials/footer.blade.php',
        'parent' => 'footer',
    ],
    'training_packages' => [
        'title' => 'Training packages',
        'group' => 'Capacity Building',
        'table' => 'cms_training_packages',
        'fields' => [
            'title' => [
                'label' => 'Package name',
                'type' => 'text',
            ],
            'description' => [
                'label' => 'Description',
                'type' => 'textarea',
            ],
            'features' => [
                'label' => 'Included features',
                'type' => 'list',
                'item' => [
                    'label' => 'Feature',
                    'type' => 'text',
                ],
            ],
            'button_label' => [
                'label' => 'Button label',
                'type' => 'text',
            ],
            'button_url' => [
                'label' => 'Button destination',
                'type' => 'url',
            ],
            'button_white_text' => [
                'label' => 'White button text',
                'type' => 'boolean',
            ],
        ],
        'repeatable' => true,
        'shape' => 'object',
        'source' => 'resources/views/pages/capacity-building.blade.php',
        'parent' => 'page_capacity_building',
    ],
];
