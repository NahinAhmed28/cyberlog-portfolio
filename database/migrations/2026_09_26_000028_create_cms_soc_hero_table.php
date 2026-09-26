<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_hero', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_b3a56a7ecb85_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_b3a56a7ecb85_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_a_href')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->longText('content_label_8')->nullable();
            $table->longText('content_div_aria_label')->nullable();
            $table->longText('content_destination')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_hero');
    }
};
