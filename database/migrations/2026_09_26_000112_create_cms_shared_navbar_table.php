<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_navbar', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_6b3d28206ab4_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_6b3d28206ab4_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_link_url')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->longText('content_icon_2')->nullable();
            $table->longText('content_link_url_2')->nullable();
            $table->longText('content_link_label_2')->nullable();
            $table->longText('content_a_href')->nullable();
            $table->longText('content_link_label_3')->nullable();
            $table->longText('content_link_label_4')->nullable();
            $table->longText('content_link_label_5')->nullable();
            $table->longText('content_icon_3')->nullable();
            $table->longText('content_link_label_6')->nullable();
            $table->longText('content_link_label_7')->nullable();
            $table->longText('content_destination')->nullable();
            $table->longText('content_destination_2')->nullable();
            $table->longText('content_destination_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_navbar');
    }
};
