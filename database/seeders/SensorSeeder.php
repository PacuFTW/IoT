<?php

namespace Database\Seeders;

use App\Models\Sensor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensor::factory()->count(1000)->create();
    }
}
