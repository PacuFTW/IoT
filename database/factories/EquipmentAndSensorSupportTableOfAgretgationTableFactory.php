<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class EquipmentAndSensorSupportTableOfAgretgationTableFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'equipment_id' => EquipmentFactory::all()->random()->id,
            'helper_id' => SensorhelperFactory::all()->random()->id,
        ];
    }
}
