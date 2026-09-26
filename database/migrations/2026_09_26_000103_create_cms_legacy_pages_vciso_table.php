<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_pages_vciso', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_31e81f170901_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_31e81f170901_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_a_href')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_title_2')->nullable();
            $table->longText('content_text')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_pages_vciso');
    }
};
