<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_nav_primary_routes', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_2e1a21baeb64_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_2e1a21baeb64_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_nav_primary_routes');
    }
};
