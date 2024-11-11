<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt(value: 'password')
        ]);

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
