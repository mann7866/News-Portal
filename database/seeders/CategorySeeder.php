<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create([
            'name' => 'Event'
        ]);
        Category::create([
            'name' => 'School'
        ]);
        Category::create([
            'name' => 'Coding'
        ]);
        Category::create([
            'name' => 'Competition'
        ]);
        Category::create([
            'name' => 'Contest'
        ]);
    }
}
