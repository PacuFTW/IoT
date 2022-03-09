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
        Schema::create('equipment', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBigInteger("site_id");
            $table->UnsignedBigInteger("sensor_id");
            $table->string("name");
            $table->string("type");
            $table->boolean("status");

            $table->foreign('site_id')->references('id')->on('sites')->onDelete('cascade');
            $table->foreign('sensor_id')->references('id')->on('sensors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('equipment');
    }
};
