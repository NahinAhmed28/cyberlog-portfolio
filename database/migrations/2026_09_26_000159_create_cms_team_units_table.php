<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_team_units', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_a954807296b3_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_a954807296b3_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_subtitle')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_color')->nullable();
            $table->json('content_points')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_team_units');
    }
};
