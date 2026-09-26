<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_layout_portfolio', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6f83dfc8b123_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6f83dfc8b123_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_default_title')->nullable();
            $table->longText('content_link_media')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_layout_portfolio');
    }
};
