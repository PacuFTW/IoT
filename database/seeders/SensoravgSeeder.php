<?php

namespace Database\Seeders;

use App\Models\Sensoraverage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensoravgSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensoraverage::factory()->count(10)->create();
    }
}
