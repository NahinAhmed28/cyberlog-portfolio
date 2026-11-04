<?php

use App\Content\PageComposition;
use App\Models\Page;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('page_blocks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('page_id')->constrained()->cascadeOnDelete();
            $table->string('type');
            $table->string('title');
            $table->string('anchor');
            $table->json('data');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_visible')->default(true);
            $table->timestamps();
            $table->softDeletes();
        });
        Schema::table('pages', function (Blueprint $table) {
            $table->boolean('is_custom')->default(false);
            $table->string('seo_title')->nullable();
            $table->text('seo_description')->nullable();
        });
        // References preserve the existing content records and templates byte for byte.
        foreach (Page::where('kind', 'page')->get() as $page) {
            app(PageComposition::class)->initialize($page);
        }
    }

    public function down(): void
    {
        Schema::dropIfExists('page_blocks');
        Schema::table('pages', fn (Blueprint $table) => $table->dropColumn(['is_custom', 'seo_title', 'seo_description']));
    }
};
