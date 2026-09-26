<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_ai_automation_cards', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_a3a22fe16b02_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_a3a22fe16b02_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_img_media')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_div_aria_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_icon_5')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_ai_automation_cards');
    }
};
