<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_page_hero', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6a73d1b482e5_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6a73d1b482e5_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_icon')->nullable();
            $table->longText('content_default_text')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_default_text_2')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_page_hero');
    }
};
