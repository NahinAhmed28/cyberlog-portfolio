<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_legacy_portfolio_index', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_c1697f3c9bdb_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_c1697f3c9bdb_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_h4_text_6')->nullable();
            $table->longText('content_paragraph_8')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_heading_4')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_heading_5')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_paragraph_13')->nullable();
            $table->longText('content_heading_6')->nullable();
            $table->longText('content_icon_5')->nullable();
            $table->longText('content_input_placeholder')->nullable();
            $table->longText('content_label_text')->nullable();
            $table->longText('content_input_placeholder_2')->nullable();
            $table->longText('content_label_text_2')->nullable();
            $table->longText('content_textarea_placeholder')->nullable();
            $table->longText('content_label_text_3')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_legacy_portfolio_index');
    }
};
