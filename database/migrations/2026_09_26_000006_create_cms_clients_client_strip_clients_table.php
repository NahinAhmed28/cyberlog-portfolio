<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_clients_client_strip_clients', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_32554188155f_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_32554188155f_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_slug')->nullable();
            $table->longText('content_name')->nullable();
            $table->longText('content_url')->nullable();
            $table->longText('content_logo')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_clients_client_strip_clients');
    }
};
