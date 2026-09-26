<?php

namespace Database\Seeders\Content;

use Database\Seeders\ContentSeeder;

class PageContactSeeder extends ContentSeeder
{
    public function run(): void
    {
        $this->seedFeature('page_contact', [
            [
                'title' => 'Contact — Cyberlog',
                'paragraph' => 'Reach Us',
                'heading' => 'Talk to a',
                'label' => 'security expert',
                'paragraph_2' => 'Tell us a little about your environment and goals — we\'ll get back to you with the right team.',
                'icon' => 'fas fa-location-dot text-teal me-2',
                'list_text' => '374 Tejgaon Industrial Area, 3rd Floor, Dhaka 1208, Bangladesh',
                'icon_2' => 'fas fa-envelope text-teal me-2',
                'a_href' => 'mailto:info@cyberlog.bd',
                'link_label' => 'info@cyberlog.bd',
                'icon_3' => 'fas fa-phone text-teal me-2',
                'list_text_2' => '+880 1576-990884',
                'input_placeholder_3' => 'Email *',
                'input_placeholder_4' => 'Phone',
                'option_text' => 'I\'m interested in…',
                'textarea_placeholder' => 'Message',
                'button_label' => 'Send Message',
                'paragraph_3' => 'Find Us',
                'heading_2' => 'Our',
                'label_2' => 'Location',
                'iframe_src' => 'https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3651.633442625472!2d90.3945519!3d23.7604475!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c1005d49b57d%3A0x5f3649e21b45c227!2sCyberlog%20Limited!5e0!3m2!1sen!2sin!4v1785575021075!5m2!1sen!2sin',
                'success_message' => 'Thank you. Your message has been received and our team will contact you shortly.',
                'name_placeholder' => 'Your name *',
                'company_placeholder' => 'Company',
                'service_aria_label' => 'Service of interest',
            ],
        ]);
    }
}
