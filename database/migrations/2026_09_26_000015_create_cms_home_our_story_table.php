<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_our_story', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_1a64bec35a46_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_1a64bec35a46_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_our_story');
    }
};
