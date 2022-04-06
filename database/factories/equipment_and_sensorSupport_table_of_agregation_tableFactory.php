<?php

namespace Database\Factories;

use App\Models\Equipment;
use App\Models\Sensorhelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class equipment_and_sensorSupport_table_of_agregation_tableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'equipment_id' => Equipment::all()->random()->id,
            'helper_id' => Sensorhelper::all()->random()->id,
        ];
    }
}
