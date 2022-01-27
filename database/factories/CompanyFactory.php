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
            'naam' => $this->faker->name(),
            'telefoonnummer' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
//            'email_verified_at' => now(),
            'website' => $this->faker->name().'@gmail.com',
            'adres' => $this->faker->address(),
            'postcode' => $this->faker->postcode()
        ];
    }
}
