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
        Schema::create('sensoraverages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('sensordatas_id');
            $table->double('avgconsumption');
            $table->foreign('sensordatas_id')->references('id')->on('sensordatas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sensoraverages');
    }
};
