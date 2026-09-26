<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_clients_deck_screens', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_cec7de31e6b7_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_cec7de31e6b7_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_cat')->nullable();
            $table->longText('content_name')->nullable();
            $table->longText('content_shot')->nullable();
            $table->longText('content_url')->nullable();
            $table->longText('content_desc')->nullable();
            $table->json('content_stats')->nullable();
            $table->longText('content_accent')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_clients_deck_screens');
    }
};
