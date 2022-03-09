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
        Schema::create('equipment_and_sensor_support', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("equipment_id");
            $table->unsignedBigInteger("helper_id");
            $table->foreign('helper_id')->references('id')->on('sensorhelpers')->onDelete('cascade');
            $table->foreign('equipment_id')->references('id')->on('equipment')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment_and_sensor_support_table_of_agregation_tables');
    }
};
