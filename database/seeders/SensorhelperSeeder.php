<?php

namespace Database\Seeders;

use App\Models\Sensorhelper;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorhelperSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensorhelper::factory()->count(1000)->create();
    }
}
