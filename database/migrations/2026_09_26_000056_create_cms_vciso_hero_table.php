<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vciso_hero', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_5b0dba8d3f36_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_5b0dba8d3f36_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_source_media')->nullable();
            $table->longText('content_video_text')->nullable();
            $table->longText('content_div_aria_label')->nullable();
            $table->longText('content_div_aria_label_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vciso_hero');
    }
};
