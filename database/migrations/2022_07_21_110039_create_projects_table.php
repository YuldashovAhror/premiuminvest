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
            $table->string('less_description')->nullable();
            $table->text('description')->nullable();
            $table->string('investing_uz')->nullable();
            $table->string('investing_ru')->nullable();
            $table->string('investing_en')->nullable();
            $table->string('roi')->nullable();
            $table->string('profit')->nullable();
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
