<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

class CompanyFactory extends Factory
{
    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'phone_number' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'website' => $this->faker->url(),
            'street_name' => $this->faker->streetName(),
            'house_number' => $this->faker->buildingNumber(),
            'zip_code' => $this->faker->postcode(),
            'place_name' => $this->faker->city()
        ];
    }
}
