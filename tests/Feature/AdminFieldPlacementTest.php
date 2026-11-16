<?php

namespace Tests\Feature;

use App\Content\EditorSchema;
use App\Content\PageComposition;
use App\Models\ContentEntry;
use App\Models\Page;
use App\Models\PageBlock;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminFieldPlacementTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    protected function setUp(): void
    {
        parent::setUp();
        $this->actingAs(User::factory()->create(['is_admin' => true]));
    }

    public function test_client_inputs_are_separate_from_hero_and_navigation_even_with_old_block_metadata(): void
    {
        $page = Page::where('slug', 'home')->firstOrFail();
        app(PageComposition::class)->initialize($page);
        $hero = PageBlock::where('page_id', $page->id)->orderBy('sort_order')->firstOrFail();
        $data = $hero->data;
        $data['modules'][] = 'shared_clients_clients';
        $hero->update(['data' => $data]);

        $response = $this->get('/admin/pages/home')->assertOk();
        $groups = $response->viewData('blockSections');
        $this->assertNotContains('shared_clients_clients', $groups[$hero->id]->pluck('key')->all());
        $clients = $response->viewData('blocks')->firstWhere('anchor', 'clients');
        $this->assertContains('shared_clients_clients', $groups[$clients->id]->pluck('key')->all());
        $stories = $response->viewData('blocks')->firstWhere('anchor', 'client-websites');
        $this->assertContains('clients_deck_screens', $groups[$stories->id]->pluck('key')->all());
        foreach ($groups as $sections) {
            $this->assertNotContains('nav', $sections->pluck('key')->all());
            $this->assertNotContains('footer', $sections->pluck('key')->all());
        }
        $this->assertSame($data, $hero->fresh()->data, 'Correcting editor grouping must not rewrite stored page layout.');
    }

    public function test_every_page_field_has_one_reachable_editor_scope_and_nested_fields_keep_their_category(): void
    {
        $this->withoutExceptionHandling();
        $report = [];
        foreach (Page::where('kind', 'page')->get() as $page) {
            $response = $this->get(route('admin.pages.show', $page))->assertOk();
            $sections = $response->viewData('sections');
            $groups = [...array_values($response->viewData('blockSections')), $response->viewData('otherSections')];
            $source = app(PageComposition::class)->source($page);
            $seen = [];
            foreach ($groups as $group) {
                foreach ($group as $section) {
                    $module = $section->key;
                    $fields = collect(app(EditorSchema::class)->fields($module, config('content_modules.'.$module.'.fields'), $source))
                        ->where('anchor', $section->editor_anchor)->all();
                    $this->assertNotEmpty($fields, $page->slug.' / '.$module.' has an empty editor scope.');
                    foreach ($fields as $key => $field) {
                        $this->assertArrayNotHasKey($key, $seen[$module] ?? [], $page->slug.' / '.$module.'.'.$key.' appears in two sections.');
                        $seen[$module][$key] = true;
                        $this->assertNestedCategory($field, $field['editor_group'], $field['anchor']);
                    }
                    $entry = $section->contents->whereNull('deleted_at')->first();
                    $parameters = [$module, 'page' => $page->slug, 'section_anchor' => $section->editor_anchor];
                    if ($entry) {
                        $parameters[] = $entry->id;
                    }
                    $form = $this->get(route($entry ? 'admin.content.edit' : 'admin.content.create', $parameters))->assertOk();
                    $this->assertSame($section->editor_scope_title, $form->viewData('definition')['title']);
                    $actual = array_keys($form->viewData('definition')['fields']);
                    $expected = array_keys($fields);
                    sort($actual);
                    sort($expected);
                    $this->assertSame($expected, $actual, $page->slug.' / '.$module.' form leaks fields from another section.');
                    $report[$page->slug][] = $module.' / '.$section->editor_anchor;
                }
            }
            foreach ($sections as $section) {
                $expected = array_keys(config('content_modules.'.$section->key.'.fields'));
                $actual = array_keys($seen[$section->key] ?? []);
                sort($expected);
                sort($actual);
                $this->assertSame($expected, $actual, $page->slug.' / '.$section->key.' lost editable fields.');
            }
        }
        file_put_contents(storage_path('framework/testing/admin-editor-category-audit.json'), json_encode($report, JSON_PRETTY_PRINT | JSON_THROW_ON_ERROR));
    }

    private function assertNestedCategory(array $field, string $group, string $anchor): void
    {
        $this->assertSame($group, $field['editor_group']);
        $this->assertSame($anchor, $field['anchor']);
        foreach ($field['fields'] ?? [] as $child) {
            $this->assertNestedCategory($child, $group, $anchor);
        }
        if (isset($field['item'])) {
            $this->assertNestedCategory($field['item'], $group, $anchor);
        }
    }

    public function test_hero_saves_preserve_other_categories_and_reject_cross_section_uploads(): void
    {
        Storage::fake('public');
        $entry = ContentEntry::forModule('page_career')->newQuery()->firstOrFail();
        $before = $entry->data;
        $base = ['page' => 'career', 'section_anchor' => 'hero', 'version' => $entry->editVersion(), 'sort_order' => $entry->sort_order, 'is_visible' => 1];
        $page = Page::where('slug', 'career')->firstOrFail();
        $schema = app(EditorSchema::class)->fields('page_career', config('content_modules.page_career.fields'), app(PageComposition::class)->source($page));
        $heroKeys = collect($schema)->where('anchor', 'hero')->keys()->all();
        $input = array_intersect_key($before, array_flip($heroKeys));
        $input['heading'] = 'Updated career heading';
        $input['paragraph_2'] = 'Wrong section';
        $this->put('/admin/content/page_career/'.$entry->id, $base + ['data' => $input])
            ->assertSessionHasNoErrors()->assertRedirect();
        $expected = $before;
        $expected['heading'] = 'Updated career heading';
        $this->assertSame($expected, $entry->fresh()->data);

        $base['version'] = $entry->fresh()->editVersion();
        $base['section_anchor'] = 'why-join';
        $this->put('/admin/content/page_career/'.$entry->id, $base + ['data' => ['paragraph' => 'Values'], 'uploads' => ['hero_video' => UploadedFile::fake()->create('wrong-section.mp4', 1, 'video/mp4')]])
            ->assertUnprocessable();
        $this->assertSame($expected, $entry->fresh()->data);
        $this->assertSame([], Storage::disk('public')->allFiles());
    }

    public function test_wrong_section_links_fail_instead_of_opening_or_saving_the_entire_record(): void
    {
        $entry = ContentEntry::forModule('shared_clients_clients')->newQuery()->firstOrFail();
        $before = $entry->data;
        $this->get('/admin/content/shared_clients_clients/'.$entry->id.'/edit?page=home&section_anchor=page-top')->assertNotFound();
        $this->put('/admin/content/shared_clients_clients/'.$entry->id, ['page' => 'home', 'section_anchor' => 'page-top', 'version' => $entry->editVersion(), 'sort_order' => 10, 'is_visible' => 1, 'data' => ['name' => 'Misplaced client']])->assertUnprocessable();
        $this->assertSame($before, $entry->fresh()->data);
    }

    public function test_scoped_forms_can_remove_every_item_from_a_list(): void
    {
        $entry = ContentEntry::forModule('services')->newQuery()->firstOrFail();
        $before = $entry->contentData(config('content_modules.services'));
        $input = $before;
        unset($input['tags']); // Removing the last list row submits no inputs for that list.
        $this->put('/admin/content/services/'.$entry->id, ['page' => 'services', 'section_anchor' => 'all-services', 'version' => $entry->editVersion(), 'sort_order' => $entry->sort_order, 'is_visible' => 1, 'data' => $input])
            ->assertSessionHasNoErrors()->assertRedirect();
        $before['tags'] = [];
        $this->assertSame($before, $entry->fresh()->data);
    }

    public function test_clients_cards_ctas_and_repeated_inputs_have_their_actual_website_categories(): void
    {
        $cases = [
            ['services', 'services', 'title', 'all-services'],
            ['home', 'shared_clients_clients', 'logo', 'clients'],
            ['clients', 'clients_deck_screens', 'shot', 'client-websites'],
            ['about', 'shared_about_industries_clients_about_industries', 'item_0', 'industries'],
            ['about', 'shared_about_industries_clients_about_clients', 'item_0', 'trusted-by'],
            ['soc', 'soc_pricing_plans', 'item_0', 'pricing'],
            ['vapt', 'vapt_reviews_reviews', 'quote', 'reviews'],
            ['ai-automation', 'page_ai_automation_timeline', 'div_text', 'evolution'],
            ['career', 'page_career_w_items', 'item_0', 'why-join'],
            ['career', 'page_career_w_items_2', 'item_0', 'why-cyberlog'],
            ['offensive-security', 'page_offensive_security_services', 'hero_image', 'hero'],
            ['offensive-security', 'page_offensive_security_services', 'cta_title', 'page-section-3'],
            ['defensive-security', 'page_defensive_security_services_items', 'image', 'page-section-2'],
            ['our-team', 'team_units', 'title', 'teams'],
            ['vciso', 'vciso_hero_left_nodes', 'label', 'hero'],
        ];
        foreach ($cases as [$slug, $module, $field, $anchor]) {
            $page = Page::where('slug', $slug)->firstOrFail();
            $schema = app(EditorSchema::class)->fields($module, config('content_modules.'.$module.'.fields'), app(PageComposition::class)->source($page));
            $this->assertArrayHasKey($field, $schema, $module.'.'.$field);
            $this->assertSame($anchor, $schema[$field]['anchor'], $slug.' / '.$module.'.'.$field);
        }
        $milestones = app(EditorSchema::class)->fields('home_our_story_milestones', config('content_modules.home_our_story_milestones.fields'));
        $this->assertNotSame('SEO settings', $milestones['title']['editor_group']);
        $this->assertNotSame('SEO page title', $milestones['title']['label']);
        $nav = app(EditorSchema::class)->fields('nav', config('content_modules.nav.fields'));
        $this->assertSame('Website logo & menu button', $nav['img_media']['editor_group']);

        $response = $this->get('/admin/pages/career')->assertOk();
        $values = $response->viewData('blocks')->firstWhere('anchor', 'why-join');
        $document = new \DOMDocument;
        @$document->loadHTML('<?xml encoding="UTF-8">'.$response->getContent());
        $summary = (new \DOMXPath($document))->query('//details[@data-block-id="'.$values->id.'"]/summary')->item(0)->textContent;
        $this->assertStringContainsString('Our Values', $summary);
        $this->assertStringNotContainsString('Career — Cyberlog', $summary);
    }
}
