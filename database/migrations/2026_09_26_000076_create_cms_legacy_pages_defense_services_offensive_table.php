<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_defense_services_offensive', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_05886a094684_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_05886a094684_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_icon')->nullable();
            $table->json('content_points')->nullable();
            $table->json('content_related')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_defense_services_offensive');
    }
};
