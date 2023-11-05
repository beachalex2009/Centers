<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Company;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\branch>
 */
class BranchFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $companies_id = Company::pluck('id')->toArray();
        return [
            //
            'name' => fake()->streetName(),
            'location' => fake()->streetAddress(),
            'mobile' => fake()->phoneNumber(),
            'company_id' => fake()->randomElement($companies_id)
        ];
    }
}
