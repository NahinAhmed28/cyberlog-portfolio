<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_navbar_service_route_names', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_872ab3d5d289_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_872ab3d5d289_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_value')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_navbar_service_route_names');
    }
};
