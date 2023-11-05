<?php

namespace Database\Factories;

use App\Models\branch;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\class_room>
 */
class ClassRoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->sentence(1),
            'capacity' => rand(5, 25),
            'configuration' => fake()->sentence(10),
            'branch_id' => branch::inRandomorder()->first()->id
            //
        ];
    }
}
