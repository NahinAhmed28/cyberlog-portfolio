<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_page_defensive_security_services_items', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_c25eac6aa8da_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_c25eac6aa8da_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_route')->nullable();
            $table->longText('content_image')->nullable();
            $table->longText('content_imageAlt')->nullable();
            $table->longText('content_lead')->nullable();
            $table->json('content_points')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_page_defensive_security_services_items');
    }
};
