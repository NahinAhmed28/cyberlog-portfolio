<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_home', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_644013f67a21_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_644013f67a21_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_link_url_2')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->longText('content_icon_5')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->longText('content_label_8')->nullable();
            $table->longText('content_label_9')->nullable();
            $table->longText('content_label_10')->nullable();
            $table->longText('content_label_11')->nullable();
            $table->longText('content_label_12')->nullable();
            $table->double('content_div_data_count_3')->nullable();
            $table->longText('content_div_data_suffix_3')->nullable();
            $table->longText('content_div_text_6')->nullable();
            $table->longText('content_div_text_7')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_paragraph_5')->nullable();
            $table->longText('content_paragraph_6')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_icon_6')->nullable();
            $table->longText('content_label_13')->nullable();
            $table->longText('content_icon_7')->nullable();
            $table->longText('content_paragraph_7')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_icon_8')->nullable();
            $table->longText('content_paragraph_8')->nullable();
            $table->longText('content_heading_5')->nullable();
            $table->longText('content_paragraph_9')->nullable();
            $table->longText('content_paragraph_10')->nullable();
            $table->longText('content_link_url_3')->nullable();
            $table->longText('content_link_label_3')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_home');
    }
};
