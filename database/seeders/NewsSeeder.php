<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Faker\Factory as Faker;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        // Pastikan direktori `news-images` tersedia
        if (!Storage::exists('news-images')) {
            Storage::makeDirectory('news-images');
        }

        for ($i = 0; $i < 10; $i++) {
            $imageUrl = 'https://picsum.photos/640/480';

            try {
                $imageContents = file_get_contents($imageUrl, false, stream_context_create([
                    "ssl" => [
                        "verify_peer" => false,
                        "verify_peer_name" => false,
                    ],
                ]));
                

                $imageContents = file_get_contents($imageUrl);
                $imageName = 'news-images/' . Str::random(10) . '.jpg';
                Storage::put($imageName, $imageContents);
            } catch (\Exception $e) {
                echo "Failed to retrieve image: " . $e->getMessage();
                continue;
            }

            News::create([
                'user_id' => 1,
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'image' => $imageName, 
                'start_date' => $faker->dateTimeBetween('-1 month', '+1 month'),
                'end_date' => $faker->dateTimeBetween('+1 month', '+2 months'),
                'approval' => $faker->randomElement(['accept', 'reject', 'submit']),
                'reason' => $faker->optional()->sentence,
                'status' => $faker->randomElement(['pending', 'ongoing', 'completed']),
                'views' => rand(0, 100),
            ]);
        }
    }
}
