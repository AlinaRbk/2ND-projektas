<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AttendanceGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
{
        return [
            'name' => $this->faker->Name(),
            'description' => $this->faker->paragraph(15),
            'difficulty' => $this->faker->difficulty(),
            'school_id' => $this->faker->numberBetween(1,10),

        ];
    }
}
