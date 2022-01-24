<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class VacatureFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'business_id' => $this->faker->name(),
            'type-opleiding' => $this->faker->numberBetween(1,2),
            'start-datum' => "1-1-2021",
            'eind-datum' => "1-1-2022",
        ];
    }
}
