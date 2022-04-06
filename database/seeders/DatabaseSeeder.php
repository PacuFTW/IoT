<?php

namespace Database\Seeders;

use Database\Factories\SensorhelperFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(FactorySeeder::class);
        $this->call(SiteSeeder::class);
        $this->call(SensorSeeder::class);
        $this->call(SensorhelperSeeder::class);
        $this->call(EquipmentSeeder::class);
        $this->call(SensorDataSeeder::class);
        //$this->call(SensoravgSeeder::class);
        $this->call(EquipmentAndSensorSupportTableOfAgretgationTableSeeder::class);
    }
}
