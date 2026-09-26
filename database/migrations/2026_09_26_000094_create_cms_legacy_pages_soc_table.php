<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_soc', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_2a3c2bf81828_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_2a3c2bf81828_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_eyebrow')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_subheading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_url')->nullable();
            $table->longText('content_hero_icon')->nullable();
            $table->longText('content_hero_caption')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_th_text')->nullable();
            $table->longText('content_th_text_2')->nullable();
            $table->longText('content_th_text_3')->nullable();
            $table->longText('content_th_text_4')->nullable();
            $table->longText('content_th_text_5')->nullable();
            $table->longText('content_th_text_6')->nullable();
            $table->longText('content_td_text_19')->nullable();
            $table->longText('content_td_text_20')->nullable();
            $table->longText('content_td_text_21')->nullable();
            $table->longText('content_td_text_22')->nullable();
            $table->longText('content_td_text_23')->nullable();
            $table->longText('content_td_text_24')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_h5_text')->nullable();
            $table->longText('content_label_text_3')->nullable();
            $table->longText('content_input_placeholder')->nullable();
            $table->longText('content_label_text_4')->nullable();
            $table->longText('content_input_placeholder_2')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_paragraph_5')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_th_text_7')->nullable();
            $table->longText('content_th_text_8')->nullable();
            $table->longText('content_th_text_9')->nullable();
            $table->longText('content_th_text_10')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_paragraph_6')->nullable();
            $table->longText('content_heading_5')->nullable();
            $table->longText('content_paragraph_7')->nullable();
            $table->longText('content_heading_6')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->longText('content_paragraph_8')->nullable();
            $table->longText('content_heading_7')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_soc');
    }
};
