<?php

namespace Database\Factories;

use App\Models\stage;
use Illuminate\Database\Eloquent\Factories\Factory;

class StageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'student-id' => $this->faker->numberBetween(1,3),
            'stagebegeleider-id' => $this->faker->numberBetween(6,8),
            'praktijkbergeleider-id' => $this->faker->numberBetween(3, 6),
        ];
    }
}
