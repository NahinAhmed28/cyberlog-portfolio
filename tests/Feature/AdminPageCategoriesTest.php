<?php

namespace Tests\Feature;

use App\Content\ContentPlacement;
use App\Content\EditorSchema;
use App\Models\ContentEntry;
use App\Models\Page;
use App\Models\PageSection;
use App\Models\User;
use Database\Seeders\PageSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Tests\TestCase;

/** Each admin page lists only its own content, and every field is filed under the website section that shows it. */
class AdminPageCategoriesTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    /** Rendered by the layouts rather than by a page template. */
    private const LAYOUT_SECTIONS = ['nav', 'footer', 'footer_wordmark', 'footer_cards', 'footer_col_12', 'footer_company_links', 'footer_specialized_links', 'site_public', 'layout_portfolio'];

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create(['is_admin' => true]));
    }

    public function test_each_page_editor_links_only_the_sections_its_template_renders(): void
    {
        foreach (Page::where('kind', 'page')->get() as $page) {
            $view = Route::getRoutes()->match(Request::create($page->path))->defaults['view'];
            $source = app(ContentPlacement::class)->source(resource_path('views/'.str_replace('.', '/', $view).'.blade.php'));
            $rendered = array_column(app(ContentPlacement::class)->references($source), 'module');
            foreach ($page->sections()->where('is_archived', false)->pluck('key') as $key) {
                $this->assertTrue(in_array($key, $rendered, true) || in_array($key, self::LAYOUT_SECTIONS, true), "{$page->slug} lists {$key}, which its template does not render.");
            }
        }
        $owners = [
            'threat_feed_events' => ['home'],
            'soc_live_events' => ['soc'],
            'vapt_live_events' => ['vapt'],
            'shared_security_service_group' => ['offensive-security', 'defensive-security'],
            'shared_reviews' => ['soc', 'vapt'],
            'services' => ['home', 'services', 'secure-code-review', 'offensive-security', 'defensive-security', 'contact'],
        ];
        foreach ($owners as $key => $slugs) {
            $this->assertEqualsCanonicalizing($slugs, PageSection::where('key', $key)->firstOrFail()->pages()->pluck('slug')->all(), $key);
        }
        $this->assertEqualsCanonicalizing(['footer', 'footer_wordmark', 'footer_cards', 'footer_col_12', 'footer_company_links', 'footer_specialized_links'], Page::where('slug', 'footer')->firstOrFail()->sections()->pluck('key')->all());
        $this->assertEqualsCanonicalizing(['site_public', 'layout_portfolio', 'shared_page_hero', 'shared_talk_to_expert'], Page::where('slug', 'site-settings')->firstOrFail()->sections()->where('is_archived', false)->pluck('key')->all());
        $this->assertSame(['nav'], $this->get('/admin/pages/navigation')->assertOk()->viewData('sections')->pluck('key')->all());
    }

    public function test_live_feed_messages_are_edited_from_the_hero_that_displays_them(): void
    {
        foreach (['home' => ['threat_feed_events', '/', 'cyberlogContent'], 'soc' => ['soc_live_events', '/services/soc', 'socEvents'], 'vapt' => ['vapt_live_events', '/services/vapt', 'vaptEvents']] as $slug => [$module, $url, $marker]) {
            $response = $this->get('/admin/pages/'.$slug)->assertOk();
            $hero = $response->viewData('blocks')->sortBy('sort_order')->first();
            $this->assertContains($module, $response->viewData('blockSections')[$hero->id]->pluck('key')->all(), $slug);
            $this->assertNotContains($module, $response->viewData('otherSections')->pluck('key')->all(), $slug);
            $this->get($url)->assertOk()->assertSee($marker, false);
        }
        $this->get('/about')->assertOk()->assertDontSee('cyberlogContent');
        $contact = $this->get('/admin/pages/contact')->assertOk();
        $form = $contact->viewData('blocks')->firstWhere('anchor', 'contact-form');
        $this->assertContains('success_message', $contact->viewData('blockSections')[$form->id]->firstWhere('key', 'page_contact')->editor_field_keys);
    }

    public function test_only_values_rendered_as_page_metadata_are_labelled_as_seo_settings(): void
    {
        $service = ContentEntry::forModule('services')->newQuery()->firstOrFail();
        $fields = $this->get(route('admin.content.edit', ['services', $service->id, 'page' => 'services', 'section_anchor' => 'all-services']))->assertOk()->viewData('definition')['fields'];
        $this->assertSame('Title', $fields['title']['label']);
        $this->assertNotContains(EditorSchema::SEO_GROUP, array_column($fields, 'editor_group'));
        foreach (['team_units' => 'our-team', 'training_packages' => 'capacity-building', 'home_our_story_milestones' => 'home'] as $module => $slug) {
            $entry = ContentEntry::forModule($module)->newQuery()->firstOrFail();
            $title = $this->get(route('admin.content.edit', [$module, $entry->id, 'page' => $slug]))->assertOk()->viewData('definition')['fields']['title'];
            $this->assertNotSame('SEO page title', $title['label'], $module);
            $this->assertNotSame(EditorSchema::SEO_GROUP, $title['editor_group'], $module);
        }
        $home = ContentEntry::forModule('page_home')->newQuery()->firstOrFail();
        $title = $this->get(route('admin.content.edit', ['page_home', $home->id, 'page' => 'home', 'section_anchor' => EditorSchema::SEO_ANCHOR]))->assertOk()->viewData('definition')['fields']['title'];
        $this->assertSame('SEO page title', $title['label']);
        $this->assertSame(EditorSchema::SEO_GROUP, $title['editor_group']);
    }

    public function test_stale_page_section_links_are_removed_by_the_seeder_and_the_migration(): void
    {
        $footer = Page::where('slug', 'footer')->firstOrFail();
        $catalogue = PageSection::where('key', 'services')->firstOrFail();
        $footer->sections()->attach($catalogue->id, ['sort_order' => 99]);
        $this->seed(PageSeeder::class);
        $this->assertFalse($footer->sections()->where('key', 'services')->exists(), 'PageSeeder keeps configuration as the source of truth.');

        $footer->sections()->attach($catalogue->id, ['sort_order' => 99]);
        (require database_path('migrations/2026_11_16_000000_realign_page_sections_with_templates.php'))->up();
        $this->assertFalse($footer->sections()->where('key', 'services')->exists(), 'The migration realigns existing installations.');
        $this->assertSame(count(config('portfolio_pages.footer.sections')), $footer->sections()->count());
    }
}
