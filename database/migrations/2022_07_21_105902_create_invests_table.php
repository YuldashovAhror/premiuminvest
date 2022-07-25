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
        Schema::create('invests', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->nullable();
            $table->double('deposit')->nullable();
            $table->string('deposit_date')->nullable();
            $table->double('investment')->nullable();
            $table->string('investment_date')->nullable();
            $table->double('percentage')->nullable();
            $table->double('earnings')->nullable();
            $table->string('earnings_date')->nullable();
            $table->double('earnings_percentage')->nullable();
            $table->double('current_earning')->nullable();
            $table->string('revaluation_date')->nullable();
            $table->string('end_date')->nullable();
            $table->string('use_funds')->nullable();
            $table->string('progress_report')->nullable();
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
        Schema::dropIfExists('invests');
    }
};
