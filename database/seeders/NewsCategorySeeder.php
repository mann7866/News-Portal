<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class NewsCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $newsItems = News::all();
        $categories = Category::all();

        foreach ($newsItems as $news) {
            $randomCategories = $categories->random(rand(1, 3))->pluck('id');
            $news->categories()->attach($randomCategories);
        }
    }
}
