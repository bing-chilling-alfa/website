<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OpleidingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'type-opleiding' => $this->faker->tld(),
        ];
    }
}
