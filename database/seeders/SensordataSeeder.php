<?php

namespace Database\Seeders;

use App\Models\Sensordata;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SensordataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Sensordata::factory()->count(10)->create();
    }
}
