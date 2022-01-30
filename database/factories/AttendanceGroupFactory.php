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
            'name' => $this->faker->word() ,
            'description' => $this->faker->paragraph() ,
            'difficulty' => $this->faker->colorName() ,
            'school_id' => rand(1,3) ,//sukurti ir mokyklu 3
        ];
    }
}