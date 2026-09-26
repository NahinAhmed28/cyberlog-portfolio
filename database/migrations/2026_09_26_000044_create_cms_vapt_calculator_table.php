<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('cms_vapt_calculator', function (Blueprint $table) {
            $table->id();
            $table->string('seed_key')->unique('cms_e1d270d09ad8_seed');
            $table->unsignedInteger('sort_order')->default(0)->index('cms_e1d270d09ad8_order');
            $table->boolean('is_visible')->default(true);
            $table->longText('content_paragraph')->nullable();
            $table->longText('content_heading')->nullable();
            $table->longText('content_label')->nullable();
            $table->longText('content_paragraph_2')->nullable();
            $table->longText('content_label_2')->nullable();
            $table->longText('content_label_3')->nullable();
            $table->double('content_input_min')->nullable();
            $table->double('content_input_max')->nullable();
            $table->longText('content_label_4')->nullable();
            $table->longText('content_label_5')->nullable();
            $table->double('content_input_min_2')->nullable();
            $table->double('content_input_max_2')->nullable();
            $table->longText('content_label_6')->nullable();
            $table->longText('content_label_7')->nullable();
            $table->double('content_input_min_3')->nullable();
            $table->double('content_input_max_3')->nullable();
            $table->longText('content_label_8')->nullable();
            $table->longText('content_label_9')->nullable();
            $table->double('content_input_min_4')->nullable();
            $table->double('content_input_max_4')->nullable();
            $table->longText('content_label_10')->nullable();
            $table->double('content_button_data_mult')->nullable();
            $table->longText('content_button_label')->nullable();
            $table->double('content_button_data_mult_2')->nullable();
            $table->longText('content_button_label_2')->nullable();
            $table->double('content_button_data_mult_3')->nullable();
            $table->longText('content_button_label_3')->nullable();
            $table->longText('content_div_text')->nullable();
            $table->longText('content_label_11')->nullable();
            $table->longText('content_div_text_2')->nullable();
            $table->longText('content_label_12')->nullable();
            $table->longText('content_div_text_3')->nullable();
            $table->longText('content_link_url')->nullable();
            $table->longText('content_link_label')->nullable();
            $table->double('content_day_rate')->nullable();
            $table->double('content_web_app_days')->nullable();
            $table->double('content_api_days')->nullable();
            $table->double('content_mobile_app_days')->nullable();
            $table->double('content_ips_per_day')->nullable();
            $table->longText('content_breakdown_template')->nullable();
            $table->double('content_initial_value')->nullable();
            $table->double('content_initial_value_2')->nullable();
            $table->double('content_initial_value_3')->nullable();
            $table->double('content_initial_value_4')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('cms_vapt_calculator');
    }
};
