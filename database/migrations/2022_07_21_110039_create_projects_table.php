<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('photo')->nullable();
            $table->string('name')->nullable();
            $table->string('less_description_uz')->nullable();
            $table->string('less_description_ru')->nullable();
            $table->string('less_description_en')->nullable();
            $table->text('description_uz')->nullable();
            $table->text('description_ru')->nullable();
            $table->text('description_en')->nullable();
            $table->string('date_from_to')->nullable();
            $table->string('profit')->nullable();
            $table->string('roi')->nullable();
            $table->string('profitability')->nullable();
            $table->string('apart_qty')->nullable();
            $table->string('floors')->nullable();
            $table->string('apart_size')->nullable();
            $table->string('commerce_size')->nullable();
            $table->string('fin_income')->nullable();
            $table->string('fin_earth')->nullable();
            $table->string('fin_cmr')->nullable();
            $table->string('fin_overhead')->nullable();
            $table->string('fin_profit_before_tax')->nullable();
            $table->string('fin_profitability_before_tax')->nullable();
            $table->string('fin_profit_after_tax')->nullable();
            $table->string('fin_profitability_after_tax')->nullable();
            $table->string('fin_investments')->nullable();
            $table->string('fin_roi_before_tax')->nullable();
            $table->string('fin_roi_after_tax')->nullable();
            $table->string('fin_land_plot')->nullable();
            $table->string('end_date')->nullable();
            $table->string('area')->nullable();
            $table->string('realizable_area')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
