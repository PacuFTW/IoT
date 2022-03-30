<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensordata>
 */
class SensordataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'sensor_id' => SensorFactory::all()->random()->id,
            'measuredData' => $this->faker->randomDigitNotZero(),
            'consumption' => $this->faker->numberBetween(100, 255),
            'consumptionType' => $this->faker->lexify('??????????'),
        ];
    }
}
