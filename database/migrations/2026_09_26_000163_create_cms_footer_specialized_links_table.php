<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_footer_specialized_links', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_0dd96f88ffae_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_0dd96f88ffae_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label')->nullable();
            $table->longText('content_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_footer_specialized_links');
    }
};
