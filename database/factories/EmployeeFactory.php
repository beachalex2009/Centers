<?php

namespace Database\Factories;

use App\Models\branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'job_title'=>fake()->jobTitle(),
            'salary'=>fake()->randomNumber(5),
            'hire_date'=>fake()->date(),
            'branch_id'=>Branch::inRandomorder()->first()->id
        ];
    }
}
