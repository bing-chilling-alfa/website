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
            'business_id' => $this->faker->name(),
            'type-opleiding' => $this->faker->name(),
            'start-datum' => $this->faker->date(),
            'eind-datum' => $this->faker->date(),

        ];
    }
}
