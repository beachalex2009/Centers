<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\vendor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\course>
 */
class CourseFactory extends Factory
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
            'name' => fake()->name(),
            'hours' => rand(10, 80),
            'price' => rand(1000, 10000),
            'category_id' => category::inRandomorder()->first()->id,
            'vendor_id' => vendor::inRandomorder()->first()->id
        ];
    }
}
