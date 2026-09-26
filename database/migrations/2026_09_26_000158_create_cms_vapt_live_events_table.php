<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_live_events', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_52d01b6b4f7f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_52d01b6b4f7f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_item_0')->nullable();
            $table->longText('content_item_1')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_live_events');
    }
};
