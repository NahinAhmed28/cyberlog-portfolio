<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_contact', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_1f107a287b1f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_1f107a287b1f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
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
            $table->longText('content_textarea_placeholder')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_iframe_src')->nullable();
            $table->longText('content_success_message')->nullable();
            $table->longText('content_name_placeholder')->nullable();
            $table->longText('content_company_placeholder')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_contact');
    }
};
