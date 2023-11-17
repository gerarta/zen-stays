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
        Schema::create('specifications', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('kost_id');
            $table->unsignedBigInteger('specification_type_id');
            $table->longText('description')->nullable();

            $table->foreign('specification_type_id')->references('id')->on('specification_types');
            $table->foreign('kost_id')->references('id')->on('kosts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spesifications');
    }
};
