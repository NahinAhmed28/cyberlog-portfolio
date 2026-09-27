<?php

namespace Tests\Feature;

use App\Content\PageEditor;
use App\Models\ContentEntry;
use App\Models\NavigationItem;
use App\Models\Page;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class PageEditingExperienceTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    private function loginAdmin(): void
    {
        $admin = User::factory()->create();
        $admin->is_admin = true;
        $admin->save();
        $this->actingAs($admin);
    }

    public function test_every_rendered_content_dependency_is_reachable_from_its_page_editor(): void
    {
        foreach (Page::where('kind', 'page')->get() as $page) {
            $this->get($page->path)->assertOk();
            $assigned = $page->sections()->pluck('key')->all();
            foreach (array_keys(request()->attributes->all()) as $key) {
                if (str_starts_with($key, 'cms.records.')) {
                    $this->assertContains(substr($key, 12), $assigned, $page->slug.' is missing '.$key);
                }
            }
        }
        $this->loginAdmin();
        foreach (Page::where('kind', 'page')->get() as $page) {
            $response = $this->get(route('admin.pages.show', $page))->assertOk()->assertSee('Images, videos & logos', false);
            $response->assertViewHas('pageMedia', fn ($media) => count($media) > 0);
            $response->assertSee('Choose from media library')->assertSee('Edit menus & submenus', false);
        }
    }

    public function test_page_logo_upload_updates_only_the_selected_field_and_is_shared_on_the_public_pages(): void
    {
        Storage::fake('public');
        $this->loginAdmin();
        $entry = ContentEntry::forModule('nav')->newQuery()->firstOrFail();
        $before = $entry->data;
        $this->put(route('admin.pages.media', ['home', $entry]), [
            'field_path' => 'img_media', 'media_value' => $before['img_media'], 'version' => $entry->editVersion(),
            'file' => UploadedFile::fake()->image('new-company-logo.png'),
        ])->assertSessionHasNoErrors()->assertRedirect(route('admin.pages.show', 'home').'#page-media');
        $updated = $entry->fresh();
        $path = $updated->data['img_media'];
        $expected = $before;
        $expected['img_media'] = $path;
        $this->assertSame($expected, $updated->data);
        Storage::disk('public')->assertExists(substr($path, 8));
        $this->get('/')->assertSee($path);
        $this->get('/about')->assertSee($path);
        $this->assertDatabaseHas('content_audits', ['module' => 'nav', 'entry_id' => $entry->id, 'action' => 'updated']);
    }

    public function test_media_editor_rejects_unrelated_records_non_media_fields_and_stale_uploads(): void
    {
        Storage::fake('public');
        $this->loginAdmin();
        $entry = ContentEntry::forModule('nav')->newQuery()->firstOrFail();
        $payload = ['field_path' => 'img_alt', 'media_value' => 'Changed', 'version' => $entry->editVersion()];
        $this->put(route('admin.pages.media', ['home', $entry]), $payload)->assertUnprocessable();
        $payload['field_path'] = 'img_media';
        $payload['version'] = 'outdated';
        $payload['file'] = UploadedFile::fake()->image('stale.png');
        $this->put(route('admin.pages.media', ['home', $entry]), $payload)->assertConflict();
        $this->assertSame([], Storage::disk('public')->allFiles());
        $unrelated = ContentEntry::forModule('vciso_hero')->newQuery()->firstOrFail();
        $this->put(route('admin.pages.media', ['contact', $unrelated]), $payload)->assertNotFound();
    }

    public function test_media_library_selection_and_video_replacement_preserve_other_fields(): void
    {
        $this->loginAdmin();
        $page = Page::where('slug', 'vciso')->with(['sections.contents', 'sections.pages'])->firstOrFail();
        $media = collect(app(PageEditor::class)->media($page->sections));
        $video = $media->first(fn ($item) => $item['field']['type'] === 'video');
        $this->assertNotNull($video);
        $entry = $video['entry'];
        $before = $entry->data;
        $this->put(route('admin.pages.media', [$page, $entry]), [
            'field_path' => $video['path'], 'media_value' => 'https://example.com/updated-video.mp4', 'version' => $entry->editVersion(),
        ])->assertSessionHasNoErrors()->assertRedirect();
        data_set($before, $video['path'], 'https://example.com/updated-video.mp4');
        $this->assertSame($before, $entry->fresh()->data);
        $this->get('/vciso')->assertSee('https://example.com/updated-video.mp4');
        $logo = ContentEntry::forModule('nav')->newQuery()->firstOrFail();
        $this->put(route('admin.pages.media', ['home', $logo]), [
            'field_path' => 'img_media', 'media_value' => 'assets/img/cyberlog-logo.png', 'version' => $logo->editVersion(),
        ])->assertSessionHasNoErrors()->assertRedirect();
    }

    public function test_add_submenu_prefills_its_parent_and_move_buttons_only_reorder_siblings(): void
    {
        $this->loginAdmin();
        $parent = NavigationItem::where('seed_key', 'services')->firstOrFail();
        $this->get(route('admin.navigation.create', ['parent_id' => $parent->id]))->assertOk()->assertViewHas('item', fn ($item) => $item->parent_id === $parent->id)->assertSee('Choose a page on this website');
        $siblings = $parent->children()->get();
        $second = $siblings[1];
        $this->post(route('admin.navigation.move', $second), ['direction' => 'up'])->assertSessionHasNoErrors()->assertRedirect();
        $this->assertSame($second->id, $parent->children()->first()->id);
        $this->assertSame($parent->id, $second->fresh()->parent_id);
    }
}
