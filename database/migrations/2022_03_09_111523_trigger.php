<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
            DB::statement('CREATE TRIGGER `Hazi` BEFORE INSERT ON `sensoraverages` FOR EACH ROW UPDATE sensoraverages SET sensoraverages.avgconsumption = NEW.sensordatas.consumption-OLD.sensordatas.consumption');

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
