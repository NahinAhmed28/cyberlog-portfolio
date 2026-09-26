<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_navbar_service_links', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_0bfca891e192_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_0bfca891e192_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_label')->nullable();
            $table->longText('content_pub')->nullable();
            $table->longText('content_legacy')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_navbar_service_links');
    }
};
