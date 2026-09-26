<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_contact_cards', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_7d11542dcb0d_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_7d11542dcb0d_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_a_href')->nullable();
            $table->longText('content_a_aria_label')->nullable();
            $table->longText('content_icon')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_contact_cards');
    }
};
