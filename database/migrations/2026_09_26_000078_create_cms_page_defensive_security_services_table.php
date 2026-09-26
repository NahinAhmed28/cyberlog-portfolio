<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_defensive_security_services', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_712c5048ebe4_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_712c5048ebe4_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_eyebrow')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_summary')->nullable();
            $table->longText('content_hero_icon')->nullable();
            $table->longText('content_hero_image')->nullable();
            $table->longText('content_hero_image_alt')->nullable();
            $table->longText('content_cta_title')->nullable();
            $table->longText('content_cta_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_defensive_security_services');
    }
};
