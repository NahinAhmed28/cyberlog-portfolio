<?php

namespace Tests\Feature;

use App\Content\ContentRegistry;
use App\Models\ContentEntry;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Tests\TestCase;

class AdminContentTest extends TestCase
{
    use RefreshDatabase;

    protected $seed = true;

    private function admin(): User
    {
        $user = User::factory()->create();
        $user->is_admin = true;
        $user->save();

        return $user;
    }

    public function test_every_public_page_renders_with_seeded_content(): void
    {
        $this->withoutExceptionHandling();
        foreach (['/', '/clients', '/services', '/services/soc', '/services/vapt', '/services/it-audit', '/services/capacity-building', '/services/secure-code-review', '/services/ai-and-automation', '/services/offensive-security-services', '/services/defensive-security-services', '/vciso', '/about', '/contact', '/career', '/our-team', '/login', '/password/reset'] as $url) {
            $this->get($url)->assertOk();
        }
        $this->get('/')->assertSee('Smarter Intelligence.')->assertSee('cl-marquee-track');
    }

    public function test_guests_and_non_admins_cannot_manage_content_or_register(): void
    {
        $this->get('/admin')->assertRedirect('/login');
        $this->get('/register')->assertNotFound();
        $this->post('/register', [])->assertNotFound();
        $this->actingAs(User::factory()->create())->get('/admin')->assertForbidden();
        $this->post('/admin/content/shared_clients_clients', [])->assertForbidden();
    }

    public function test_laravel_ui_login_only_accepts_administrators(): void
    {
        $user = User::factory()->create(['password' => 'AnExamplePassword123']);
        $this->post('/login', ['email' => $user->email, 'password' => 'AnExamplePassword123'])->assertSessionHasErrors('email');
        $this->assertGuest();
        $user->is_admin = true;
        $user->save();
        $this->post('/login', ['email' => $user->email, 'password' => 'AnExamplePassword123'])->assertRedirect('/admin');
        $this->assertAuthenticatedAs($user);
        $this->post('/logout')->assertRedirect('/');
        $this->assertGuest();
    }

    public function test_every_content_module_has_a_working_editor(): void
    {
        $this->withoutExceptionHandling();
        $this->actingAs($this->admin());
        $this->get('/admin')->assertOk();
        foreach (app(ContentRegistry::class)->all() as $key => $definition) {
            $this->get(route('admin.content.index', $key))->assertOk();
            $record = ContentEntry::forModule($key)->newQuery()->first();
            if ($record) {
                $this->get(route('admin.content.edit', [$key, $record->id]))->assertOk()->assertSee('Save changes');
            }
            if ($definition['repeatable']) {
                $this->get(route('admin.content.create', $key))->assertOk();
            }
        }
        $this->get('/admin/media')->assertOk();
        $this->get('/admin/profile')->assertOk();
        $this->get('/admin/inquiries')->assertOk();
    }

    public function test_editing_copy_updates_public_page_and_records_history_without_reseeding_overwrites(): void
    {
        $this->actingAs($this->admin());
        $key = 'home_hero';
        $definition = app(ContentRegistry::class)->get($key);
        $record = ContentEntry::forModule($key)->newQuery()->firstOrFail();
        $data = $record->contentData($definition);
        $data['heading'] = 'Updated security expertise';
        $this->put(route('admin.content.update', [$key, $record->id]), ['data' => $data, 'sort_order' => 10, 'is_visible' => 1, 'version' => $record->editVersion()])->assertSessionHasNoErrors()->assertRedirect();
        $this->get('/')->assertSee('Updated security expertise');
        $this->seed(DatabaseSeeder::class);
        $this->get('/')->assertSee('Updated security expertise');
        $this->assertDatabaseHas('content_audits', ['module' => $key, 'action' => 'updated']);
    }

    public function test_admin_can_add_hide_trash_restore_and_upload_a_client_logo(): void
    {
        Storage::fake('public');
        $this->actingAs($this->admin());
        $key = 'shared_clients_clients';
        $payload = ['data' => ['name' => 'New Portfolio Client', 'sector' => 'Technology', 'url' => 'https://example.com', 'logo' => ''], 'sort_order' => 5, 'is_visible' => 1, 'uploads' => ['logo' => UploadedFile::fake()->image('client.png')]];
        $this->post(route('admin.content.store', $key), $payload)->assertSessionHasNoErrors()->assertRedirect();
        $record = ContentEntry::forModule($key)->newQuery()->where('content_name', 'New Portfolio Client')->firstOrFail();
        Storage::disk('public')->assertExists(substr($record->content_logo, 8));
        $this->get('/')->assertSee('New Portfolio Client');
        $this->delete(route('admin.content.destroy', [$key, $record->id]))->assertRedirect();
        $this->get('/')->assertDontSee('New Portfolio Client');
        $this->seed(DatabaseSeeder::class);
        $this->get('/')->assertDontSee('New Portfolio Client');
        $this->post(route('admin.content.restore', [$key, $record->id]))->assertRedirect();
        $this->get('/')->assertSee('New Portfolio Client');
    }

    public function test_unsafe_links_and_executable_uploads_are_rejected(): void
    {
        $this->actingAs($this->admin());
        $key = 'shared_clients_clients';
        $data = ['name' => 'Unsafe', 'sector' => '', 'url' => 'javascript:alert(1)', 'logo' => ''];
        $this->post(route('admin.content.store', $key), ['data' => $data, 'sort_order' => 1, 'is_visible' => 1])->assertSessionHasErrors('url');
        $this->post('/admin/media', ['file' => UploadedFile::fake()->create('payload.php', 1, 'application/x-httpd-php')])->assertSessionHasErrors('file');
        $this->get('/admin/content/users')->assertNotFound();
    }

    public function test_inquiry_submission_is_saved_and_admin_can_update_its_status(): void
    {
        $this->post('/contact', ['name' => 'Test Visitor', 'email' => 'visitor@example.test', 'message' => 'Please discuss a security assessment.'])->assertSessionHasNoErrors()->assertRedirect();
        $this->assertDatabaseHas('inquiries', ['name' => 'Test Visitor', 'status' => 'new']);
        $this->actingAs($this->admin());
        $id = DB::table('inquiries')->value('id');
        $this->get('/admin/inquiries/'.$id)->assertOk()->assertSee('Test Visitor');
        $this->put('/admin/inquiries/'.$id, ['status' => 'read', 'admin_notes' => 'Follow up tomorrow.'])->assertRedirect();
        $this->assertDatabaseHas('inquiries', ['id' => $id, 'status' => 'read']);
    }
}
