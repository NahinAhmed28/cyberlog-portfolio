<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PortfolioContentSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PageSeeder::class,
            Pages\HomePageSeeder::class,
            Pages\ClientsPageSeeder::class,
            Pages\ServicesPageSeeder::class,
            Pages\SocPageSeeder::class,
            Pages\VaptPageSeeder::class,
            Pages\ItAuditPageSeeder::class,
            Pages\CapacityBuildingPageSeeder::class,
            Pages\SecureCodeReviewPageSeeder::class,
            Pages\AiAutomationPageSeeder::class,
            Pages\OffensiveSecurityPageSeeder::class,
            Pages\DefensiveSecurityPageSeeder::class,
            Pages\VcisoPageSeeder::class,
            Pages\AboutPageSeeder::class,
            Pages\OurTeamPageSeeder::class,
            Pages\CareerPageSeeder::class,
            Pages\ContactPageSeeder::class,
            Pages\NavigationPageSeeder::class,
            Pages\FooterPageSeeder::class,
            Pages\SiteSettingsPageSeeder::class,
        ]);
    }
}
