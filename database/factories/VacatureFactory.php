<?php

namespace Database\Factories;

use App\Models\Vacature;
use Illuminate\Database\Eloquent\Factories\Factory;

class VacatureFactory extends Factory
{
    protected $model = Vacature::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'business_id' => $this->faker->numberBetween(1,15),
            'title' => $this->faker->name(),
            'type-opleiding' => $this->faker->numberBetween(1,2),
            'start-datum' => "1-1-2021",
            'eind-datum' => "1-1-2022",
        ];
    }
}
