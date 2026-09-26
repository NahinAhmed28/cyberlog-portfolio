<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_about_industries_clients_about_clients', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_0748a611b0ba_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_0748a611b0ba_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->longText('content_item_1')->nullable();
            $table->longText('content_item_2')->nullable();
            $table->longText('content_item_3')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_about_industries_clients_about_clients');
    }
};
