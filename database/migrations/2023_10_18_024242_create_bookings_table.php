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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('boarding_house_id');
            $table->string('start_time');
            $table->string('end_time')->nullable();
            $table->boolean('is_confirmed');
            $table->boolean('is_ongoing');
            $table->integer('total_amount');
            $table->integer('temp_amount');
            
            $table->foreign('customer_id')->references('id')->on('users');
            $table->foreign('boarding_house_id')->references('id')->on('boarding_houses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bookings');
    }
};
