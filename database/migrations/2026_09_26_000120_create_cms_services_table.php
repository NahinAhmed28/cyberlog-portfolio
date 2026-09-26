<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_services', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_3e7aaa79601a_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_3e7aaa79601a_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_title')->nullable();
            $table->longText('content_icon')->nullable();
            $table->longText('content_route')->nullable();
            $table->longText('content_group')->nullable();
            $table->longText('content_kicker')->nullable();
            $table->longText('content_desc')->nullable();
            $table->json('content_tags')->nullable();
            $table->json('content_detail')->nullable();
            $table->longText('content_url')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_services');
    }
};
