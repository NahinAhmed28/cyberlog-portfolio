<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_home_defend', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_d940dc572e55_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_d940dc572e55_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_icon')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_paragraph_3')->nullable();
            $table->longText('content_icon_4')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_paragraph_4')->nullable();
            $table->longText('content_icon_5')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->longText('content_paragraph_5')->nullable();
            $table->longText('content_paragraph_6')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_heading_2')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_paragraph_7')->nullable();
            $table->longText('content_icon_6')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_heading_3')->nullable();
            $table->longText('content_icon_7')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_home_defend');
    }
};
