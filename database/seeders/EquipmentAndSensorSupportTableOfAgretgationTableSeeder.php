<?php

namespace Database\Seeders;

use App\Models\equipment_and_sensorSupport_table_of_agregation_table;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentAndSensorSupportTableOfAgretgationTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       equipment_and_sensorSupport_table_of_agregation_table::factory()->count(1000)->create();
    }
}
