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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('vin')->nullable(true);
            $table->string('make')->nullable(true);
            $table->string('manufacturer')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('manufacturer_address')->nullable(true);
            $table->string('model')->nullable(true);
            $table->string('series')->nullable(true);
            $table->string('check_digit')->nullable(true);
            $table->integer('sequential_number')->nullable(true);
            $table->string('body')->nullable(true);
            $table->integer('length')->nullable(true);
            $table->integer('width')->nullable(true);
            $table->integer('height')->nullable(true);
            $table->integer('max_speed')->nullable(true);
            $table->string('type')->nullable(true);
            $table->integer('model_year')->nullable(true);
            $table->integer('number_of_seats')->nullable(true);
            $table->integer('number_of_doors')->nullable(true);
            $table->integer('number_of_axles')->nullable(true);
            $table->integer('wheelbase')->nullable(true);
            $table->string('wheel_size')->nullable(true);
            $table->string('transmission')->nullable(true);
            $table->integer('abs')->nullable(true);
            $table->integer('max_roof_load')->nullable(true);
            $table->integer('permitted_trailer_load')->nullable(true);
            $table->string('drive')->nullable(true);
            $table->string('steering_type')->nullable(true);
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
        Schema::dropIfExists('cars');
    }
};
