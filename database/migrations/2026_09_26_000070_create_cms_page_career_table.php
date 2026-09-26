<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_career', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_189dbe443077_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_189dbe443077_order');
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
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_link_url_2')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_career');
    }
};
