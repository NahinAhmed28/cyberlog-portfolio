<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_live_events', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_3dab9c8d0f87_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_3dab9c8d0f87_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->longText('content_item_1')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_live_events');
    }
};
