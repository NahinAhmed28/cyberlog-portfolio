<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_ai_automation', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_000c78a029cc_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_000c78a029cc_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_source_media')->nullable();
            $table->longText('content_video_text')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_14')->nullable();
            $table->longText('content_div_text_15')->nullable();
            $table->longText('content_paragraph_5')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_paragraph_6')->nullable();
            $table->longText('content_paragraph_13')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_paragraph_14')->nullable();
            $table->longText('content_img_media_3')->nullable();
            $table->longText('content_heading_7')->nullable();
            $table->longText('content_div_aria_label_3')->nullable();
            $table->longText('content_icon_17')->nullable();
            $table->longText('content_icon_18')->nullable();
            $table->longText('content_icon_19')->nullable();
            $table->longText('content_icon_20')->nullable();
            $table->longText('content_icon_21')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->longText('content_paragraph_17')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->longText('content_destination')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_ai_automation');
    }
};
