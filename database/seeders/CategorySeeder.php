<?php

namespace Database\Seeders;

use App\Models\category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        category::create(['name' => 'technical']);
        category::create(['name' => 'english']);

        category::create(['name' => 'Programming', 'category_id' => 1]);
        category::create(['name' => 'Office Works', 'category_id' => 1]);
        category::create(['name' => 'Network', 'category_id' => 1]);
        
        category::create(['name' => 'mid', 'category_id' => 2]);
        category::create(['name' => 'hard', 'category_id' => 2]);
    }
}
