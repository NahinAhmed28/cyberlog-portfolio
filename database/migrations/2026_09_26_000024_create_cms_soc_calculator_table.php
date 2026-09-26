<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_soc_calculator', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_e390dae143e6_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_e390dae143e6_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->double('content_input_min')->nullable();
            $table->double('content_input_max')->nullable();
            $table->double('content_input_step')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_small_text')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->double('content_input_min_2')->nullable();
            $table->double('content_input_max_2')->nullable();
            $table->double('content_input_step_2')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->double('content_button_data_mult')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->double('content_button_data_mult_2')->nullable();
            $table->longText('content_button_label_2')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->longText('content_small_text_2')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->double('content_base_cost')->nullable();
            $table->double('content_per_endpoint')->nullable();
            $table->double('content_per_gb')->nullable();
            $table->double('content_rounding_increment')->nullable();
            $table->longText('content_destination')->nullable();
            $table->double('content_initial_value')->nullable();
            $table->double('content_initial_value_2')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_soc_calculator');
    }
};
