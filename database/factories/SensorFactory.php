<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sensor>
 */
class SensorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => $this->faker()->boolean,
            'productiontype' => $this->faker()->text,
            'producedquantity' => $this->faker()->numberBetween(1, 100),
        ];
    }
}
