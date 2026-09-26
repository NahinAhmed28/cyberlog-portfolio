<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_vapt', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_e6b88964d662_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_e6b88964d662_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_eyebrow')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_subheading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_url')->nullable();
            $table->longText('content_hero_icon')->nullable();
            $table->longText('content_hero_caption')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_h5_text')->nullable();
            $table->longText('content_label_text')->nullable();
            $table->longText('content_option_text')->nullable();
            $table->longText('content_option_text_2')->nullable();
            $table->longText('content_option_text_3')->nullable();
            $table->longText('content_option_text_4')->nullable();
            $table->longText('content_option_text_5')->nullable();
            $table->longText('content_label_text_2')->nullable();
            $table->longText('content_option_text_6')->nullable();
            $table->longText('content_option_text_7')->nullable();
            $table->longText('content_option_text_8')->nullable();
            $table->longText('content_label_text_3')->nullable();
            $table->longText('content_input_placeholder')->nullable();
            $table->longText('content_label_text_4')->nullable();
            $table->longText('content_input_placeholder_2')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_paragraph_5')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_th_text')->nullable();
            $table->longText('content_th_text_2')->nullable();
            $table->longText('content_th_text_3')->nullable();
            $table->longText('content_th_text_4')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_paragraph_6')->nullable();
            $table->longText('content_heading_5')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_h4_text')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_paragraph_7')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_paragraph_8')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_h4_text_2')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_paragraph_9')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->longText('content_paragraph_10')->nullable();
            $table->longText('content_icon_5')->nullable();
            $table->longText('content_h4_text_3')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_paragraph_11')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->longText('content_paragraph_12')->nullable();
            $table->longText('content_paragraph_13')->nullable();
            $table->longText('content_heading_6')->nullable();
            $table->longText('content_label_8')->nullable();
            $table->longText('content_heading_7')->nullable();
            $table->longText('content_paragraph_14')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_vapt');
    }
};
