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
            DB::statement('CREATE TRIGGER `Hazi` BEFORE INSERT ON `sensoraverages` FOR EACH ROW UPDATE szenzorátlag SET szenzorátlag.átlagfogyasztás = NEW.szenzoradatok.fogyasztás-OLD.szenzoradatok.fogyasztás');

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
