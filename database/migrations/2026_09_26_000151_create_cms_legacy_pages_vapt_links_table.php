<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_vapt_links', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_a1cbc4edda41_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_a1cbc4edda41_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_vapt_links');
    }
};
