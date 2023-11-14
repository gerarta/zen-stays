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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('payment_provider_id');
            $table->unsignedBigInteger('booking_id');
            $table->string('account_name');
            $table->string('account_number');
            $table->boolean('is_confirmed');
            $table->string('payment_proof');
            $table->integer('amount');

            $table->foreign('payment_provider_id')->references('id')->on('payment_providers');
            $table->foreign('booking_id')->references('id')->on('bookings');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');

    }
};
