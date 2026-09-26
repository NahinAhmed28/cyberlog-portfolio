<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_footer', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_d7eb6b340a11_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_d7eb6b340a11_order');
            $table->boolean('is_visible')->default(true);
            $table->json('content_group_routes')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->longText('content_div_text_3')->nullable();
            $table->longText('content_div_text_4')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_a_href')->nullable();
            $table->longText('content_link_label_12')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_a_href_2')->nullable();
            $table->longText('content_link_label_13')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_div_text_5')->nullable();
            $table->longText('content_div_text_6')->nullable();
            $table->longText('content_div_text_7')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_footer');
    }
};
