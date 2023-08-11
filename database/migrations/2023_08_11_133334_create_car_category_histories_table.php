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
        Schema::create('car_category_histories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_category_id');
            $table->integer('distance')->nullable(true);
            $table->timestamps();

            $table->foreign('car_category_id')
                ->references('id')
                ->on('car_categories')
                ->restrictOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('car_category_histories');
    }
};
