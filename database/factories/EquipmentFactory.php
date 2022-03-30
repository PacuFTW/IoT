<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Equipment>
 */
class EquipmentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker->boolean,
            'sensor_id' => SensorFactory::all()->random()->id,
            'name' => $this->faker->lexify('??????????'),
            'type' => $this->faker->lexify('??????????'),
        ];
    }
}
