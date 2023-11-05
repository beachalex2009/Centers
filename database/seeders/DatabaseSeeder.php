<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\Manager;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([CategorySeeder::class, userseeder::class]);

        // \App\Models\User::factory(10)->create();
        \App\Models\User::factory(499)->create();
        \App\Models\company::factory(500)->create();
        \App\Models\branch::factory(500)->create();
        \App\Models\manager::factory(500)->create();
        \App\Models\employee::factory(500)->create();
        \App\Models\vendor::factory(500)->create();
        \App\Models\classroom::factory(500)->create();
        \App\Models\course::factory(500)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        foreach (range(1, 500) as $i) {
            Manager::find($i)->update(['company_id' => $i]);
            Employee::find($i)->update(['user_id' => $i]);
        }
    }
}
