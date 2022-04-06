<?php

namespace Database\Factories;

use App\Models\Sensor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensorhelper>
 */
class SensorhelperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sensor_id' => Sensor::all()->random()->id,
            'status' => $this->faker->boolean,
            'type' => $this->faker->lexify('??????????'),
            'name' => $this->faker->asciify('?????????????'),
        ];
    }
}
