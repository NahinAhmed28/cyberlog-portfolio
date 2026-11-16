<?php

namespace Database\Seeders;

use App\Content\PortfolioConfiguration;
use App\Models\Page;
use App\Models\PageSection;
use Illuminate\Database\Seeder;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        PortfolioConfiguration::validate();
        foreach (config('content_modules') as $key => $definition) {
            PageSection::firstOrCreate(['key' => $key], ['title' => $definition['title'], 'is_archived' => $definition['group'] === 'Archived layouts']);
        }
        foreach (config('portfolio_pages') as $slug => $definition) {
            $page = Page::firstOrCreate(['slug' => $slug], collect($definition)->only(['title', 'path', 'kind'])->all() + ['sort_order' => array_search($slug, array_keys(config('portfolio_pages'))) * 10]);
            // The configuration is the single source of truth: a page lists exactly the sections its template renders.
            $links = [];
            foreach ($definition['sections'] as $order => $key) {
                $links[PageSection::where('key', $key)->firstOrFail()->id] = ['sort_order' => $order];
            }
            $page->sections()->sync($links);
        }
    }
}
