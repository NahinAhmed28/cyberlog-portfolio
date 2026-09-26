<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_shared_clients_clients', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_b71d5c6e03da_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_b71d5c6e03da_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_name')->nullable();
            $table->longText('content_sector')->nullable();
            $table->longText('content_url')->nullable();
            $table->longText('content_logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_shared_clients_clients');
    }
};
