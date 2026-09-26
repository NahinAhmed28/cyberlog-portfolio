<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_expert', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_c5ebefa779e3_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_c5ebefa779e3_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_list_text')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_a_href')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_list_text_2')->nullable();
            $table->longText('content_input_placeholder_3')->nullable();
            $table->longText('content_input_placeholder_4')->nullable();
            $table->longText('content_option_text')->nullable();
            $table->longText('content_option_text_2')->nullable();
            $table->longText('content_option_text_3')->nullable();
            $table->longText('content_option_text_4')->nullable();
            $table->longText('content_option_text_5')->nullable();
            $table->longText('content_option_text_6')->nullable();
            $table->longText('content_option_text_7')->nullable();
            $table->longText('content_textarea_placeholder')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_name_placeholder')->nullable();
            $table->longText('content_company_placeholder')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_expert');
    }
};
