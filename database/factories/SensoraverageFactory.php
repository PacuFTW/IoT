<?php

namespace Database\Factories;

use App\Models\Sensordata;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensoraverage>
 */
class SensoraverageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sensordatas_id' => Sensordata::all()->random()->id,
        ];
    }
}
