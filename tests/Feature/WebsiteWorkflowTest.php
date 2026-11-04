<?php

namespace Tests\Feature;

use App\Content\PageComposition;
use App\Mail\InquiryNotification;
use App\Models\ContentEntry;
use App\Models\Inquiry;
use App\Models\NavigationItem;
use App\Models\Page;
use App\Models\PageBlock;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Mail\Mailer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class WebsiteWorkflowTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    private function admin(): void
    {
        $user = User::factory()->create(['is_admin' => true]);
        $this->actingAs($user);
    }

    public function test_contact_saves_and_notifies_with_reply_to_and_handles_transport_failure(): void
    {
        Mail::fake();
        $data = ['name' => 'Visitor', 'company' => 'Example', 'email' => 'visitor@example.com', 'phone' => '+123', 'service' => 'VAPT', 'message' => 'Please contact me', 'website' => ''];
        $this->from('/contact')->post('/contact', $data)->assertRedirect('/contact')->assertSessionHas('contact_status');
        $inquiry = Inquiry::firstOrFail();
        $this->assertNotNull($inquiry->notified_at);
        $this->assertSame(url('/contact'), $inquiry->page_url);
        Mail::assertSent(InquiryNotification::class, function ($mail) {
            $mail->build();

            return $mail->hasTo('info@cyberlog.bd') && $mail->hasReplyTo('visitor@example.com') && str_contains($mail->render(), 'Please contact me');
        });
        Mail::swap(\Mockery::mock(Mailer::class, function ($mock) {
            $mock->shouldReceive('to')->andThrow(new \RuntimeException('SMTP unavailable'));
        }));
        $this->post('/contact', $data)->assertSessionHas('contact_error');
        $this->assertSame(2, Inquiry::count());
        $this->assertNull(Inquiry::latest('id')->first()->notified_at);
    }

    public function test_contact_rejects_spam_and_invalid_input_and_limits_requests(): void
    {
        Mail::fake();
        $this->post('/contact', ['name' => 'Bot', 'email' => 'bad', 'message' => 'Hi', 'website' => 'spam'])->assertSessionHasErrors(['email', 'website']);
        $this->assertSame(0, Inquiry::count());
        for ($i = 0; $i < 4; $i++) {
            $this->post('/contact', []);
        }
        $this->post('/contact', [])->assertStatus(429);
        Mail::assertNothingSent();
    }

    public function test_inquiry_search_status_notes_read_export_and_delete(): void
    {
        $this->admin();
        $inquiry = Inquiry::create(['name' => '=Example', 'email' => 'visitor@example.com', 'message' => 'Unique inquiry']);
        $this->get('/admin/inquiries?q=Unique')->assertOk()->assertSee('=Example');
        $this->get('/admin/inquiries/'.$inquiry->id)->assertOk();
        $this->assertNotNull($inquiry->fresh()->read_at);
        $this->put('/admin/inquiries/'.$inquiry->id, ['status' => 'in_progress', 'admin_notes' => 'Called visitor'])->assertRedirect();
        $this->assertSame('in_progress', $inquiry->fresh()->status);
        $response = $this->get('/admin/inquiries/export?q=Unique')->assertOk();
        $this->assertStringContainsString("'=Example", $response->streamedContent());
        $this->delete('/admin/inquiries/'.$inquiry->id)->assertRedirect('/admin/inquiries');
        $this->assertSoftDeleted($inquiry);
    }

    public function test_upload_is_persisted_and_can_be_served_without_a_symlink_and_library_selection_survives(): void
    {
        $this->admin();
        Storage::fake('public');
        $entry = ContentEntry::forModule('shared_clients_clients')->newQuery()->firstOrFail();
        $definition = config('content_modules.shared_clients_clients');
        $data = $entry->contentData($definition);
        $this->put('/admin/content/shared_clients_clients/'.$entry->id, ['version' => $entry->editVersion(), 'sort_order' => 10, 'is_visible' => 1, 'data' => $data, 'uploads' => ['logo' => UploadedFile::fake()->image('jaago.png')]])->assertRedirect();
        $entry->refresh();
        $path = $entry->data['logo'];
        $this->assertStringStartsWith('storage/uploads/', $path);
        Storage::disk('public')->assertExists(substr($path, 8));
        $this->get('/'.$path)->assertOk();
        $this->get('/admin/content/shared_clients_clients/'.$entry->id.'/edit')->assertOk()->assertSee($path);
        $this->get('/')->assertOk()->assertSee($path);
        $data['logo'] = $path;
        $this->put('/admin/content/shared_clients_clients/'.$entry->id, ['version' => $entry->editVersion(), 'sort_order' => 10, 'is_visible' => 1, 'data' => $data])->assertRedirect();
        $this->assertSame($path, $entry->fresh()->data['logo']);
        $this->get('/storage/uploads/../../.env')->assertNotFound();
    }

    public function test_insert_between_menu_items_and_drag_order_are_published(): void
    {
        $this->admin();
        $parent = NavigationItem::where('seed_key', 'services')->firstOrFail();
        $siblings = $parent->children;
        $after = $siblings[1];
        $this->post('/admin/navigation', ['label' => 'New Service', 'url' => '/services/new-service', 'type' => 'link', 'parent_id' => $parent->id, 'sort_order' => 100, 'after_id' => $after->id, 'is_visible' => 1, 'new_tab' => 0])->assertRedirect();
        $ids = $parent->children()->pluck('id')->all();
        $new = NavigationItem::where('label', 'New Service')->firstOrFail();
        $this->assertSame(array_search($after->id, $ids) + 1, array_search($new->id, $ids));
        $this->postJson('/admin/navigation/reorder', ['parent_id' => $parent->id, 'ids' => array_reverse($ids)])->assertOk();
        $this->assertSame(array_reverse($ids), $parent->children()->pluck('id')->all());
        $this->get('/')->assertSee('New Service');
    }

    public function test_section_migration_preserves_every_legacy_page_and_vapt_has_nine_panels(): void
    {
        $composer = app(PageComposition::class);
        foreach (Page::where('kind', 'page')->get() as $page) {
            if (! $page->path) {
                continue;
            }
            $before = $this->get($page->path)->assertOk()->getContent();
            $composer->initialize($page);
            $after = $this->get($page->path)->assertOk()->getContent();
            $normalize = fn ($html) => preg_replace('/ id="page-section-\d+"/', '', $html);
            $this->assertSame($normalize($before), $normalize($after), $page->slug);
        }
        $page = Page::where('path', '/services/vapt')->firstOrFail();
        $this->assertSame(9, PageBlock::where('page_id', $page->id)->count());
        $this->admin();
        $this->get('/admin/pages/'.$page->slug)->assertOk()->assertSee('VAPT Cost Calculator')->assertSee('Client Feedback &amp; Ratings', false);
    }

    public function test_new_service_sections_hide_reorder_duplicate_and_restore_without_code_changes(): void
    {
        $this->admin();
        $this->post('/admin/service-pages', ['title' => 'New Service', 'slug' => 'new-service', 'seo_title' => 'New SEO', 'seo_description' => 'SEO description'])->assertRedirect('/admin/pages/new-service');
        $page = Page::where('slug', 'new-service')->firstOrFail();
        $this->get('/admin/pages/new-service/blocks/create')->assertOk();
        $this->post('/admin/pages/new-service/blocks', ['title' => 'Intro', 'type' => 'hero', 'sort_order' => 10, 'is_visible' => 1, 'data' => ['heading' => 'Managed heading', 'description' => 'Managed description']])->assertRedirect();
        $block = PageBlock::where('page_id', $page->id)->firstOrFail();
        $this->get('/services/new-service')->assertOk()->assertSee('Managed heading')->assertSee('New SEO');
        $this->get('/admin/pages/new-service/blocks/'.$block->id.'/edit')->assertOk();
        $url = '/admin/pages/new-service/blocks/'.$block->id.'/action';
        $this->post($url, ['action' => 'hide'])->assertRedirect();
        $this->get('/services/new-service')->assertDontSee('Managed heading');
        $this->post($url, ['action' => 'show']);
        $this->post($url, ['action' => 'duplicate']);
        $this->assertSame(2, PageBlock::where('page_id', $page->id)->count());
        $ids = PageBlock::where('page_id', $page->id)->pluck('id')->all();
        $this->postJson('/admin/pages/new-service/blocks/reorder', ['ids' => array_reverse($ids)])->assertOk();
        $this->post($url, ['action' => 'delete']);
        $this->assertSoftDeleted($block);
        $this->post($url, ['action' => 'restore']);
        $this->assertFalse($block->fresh()->trashed());
    }

    public function test_legacy_item_controls_and_section_scoped_edits_preserve_other_content(): void
    {
        $this->admin();
        $module = 'shared_clients_clients';
        $entry = ContentEntry::forModule($module)->newQuery()->firstOrFail();
        $this->post('/admin/content/'.$module.'/'.$entry->id.'/action', ['action' => 'duplicate'])->assertRedirect();
        $copy = ContentEntry::forModule($module)->newQuery()->latest('id')->firstOrFail();
        $this->assertSame($entry->data, $copy->data);
        $this->post('/admin/content/'.$module.'/'.$copy->id.'/action', ['action' => 'hide'])->assertRedirect();
        $this->assertFalse($copy->fresh()->is_visible);
        $ids = ContentEntry::forModule($module)->newQuery()->orderBy('sort_order')->orderBy('id')->pluck('id')->all();
        $this->postJson('/admin/content/'.$module.'/reorder', ['ids' => array_reverse($ids)])->assertOk();
        $entry = ContentEntry::forModule('page_contact')->newQuery()->firstOrFail();
        $before = $entry->data;
        $this->get('/admin/content/page_contact/'.$entry->id.'/edit?page=contact&section_anchor=map')->assertOk()->assertSee('section_anchor');
        $this->put('/admin/content/page_contact/'.$entry->id, ['page' => 'contact', 'section_anchor' => 'map', 'version' => $entry->editVersion(), 'sort_order' => 10, 'is_visible' => 1, 'data' => ['heading_2' => 'Updated map heading']])->assertRedirect();
        $this->assertSame($before['heading'], $entry->fresh()->data['heading']);
        $this->assertSame('Updated map heading', $entry->fresh()->data['heading_2']);
    }

    public function test_deleting_every_legacy_section_does_not_restore_default_content(): void
    {
        $page = Page::where('path', '/services/vapt')->firstOrFail();
        app(PageComposition::class)->initialize($page);
        PageBlock::where('page_id', $page->id)->delete();
        $this->get('/services/vapt')->assertOk()->assertDontSee('id="calculator"', false)->assertDontSee('id="posture"', false);
    }
}
