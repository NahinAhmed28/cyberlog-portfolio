<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_our_team_team', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_17c97a690307_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_17c97a690307_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_name')->nullable();
            $table->longText('content_role')->nullable();
            $table->longText('content_photo')->nullable();
            $table->double('content_width')->nullable();
            $table->double('content_height')->nullable();
            $table->longText('content_bio')->nullable();
            $table->json('content_social')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_our_team_team');
    }
};
