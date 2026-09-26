<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_nav', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_fea877d4f0f1_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_fea877d4f0f1_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_img_media')->nullable();
            $table->longText('content_img_alt')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->longText('content_link_label_3')->nullable();
            $table->longText('content_link_label_6')->nullable();
            $table->longText('content_link_label_7')->nullable();
            $table->longText('content_link_label_12')->nullable();
            $table->longText('content_destination')->nullable();
            $table->longText('content_destination_2')->nullable();
            $table->longText('content_destination_3')->nullable();
            $table->longText('content_destination_6')->nullable();
            $table->longText('content_destination_11')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_nav');
    }
};
