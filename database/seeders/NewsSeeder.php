<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\News;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 20; $i++) {
            $filepath = public_path('storage/images');
            if (!File::exists($filepath)) {
                File::makeDirectory($filepath);
                News::create([
                    'upload_by' => $faker->name,
                    'title'  => $faker->sentence(5),
                    'slug'  => Str::slug($faker->sentence(5), '-'),
                    'photo'  => $faker->word(),
                    // 'path'  => $faker->image(storage_path('news'), 1920, 1280, null, false),
                    'path' => $faker->image($filepath, 400, 300, null, false),
                    'date'  => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                    'description'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]);
            } else {
                News::create([
                    'upload_by' => $faker->name,
                    'title'  => $faker->sentence(5),
                    'slug'  => Str::slug($faker->sentence(5), '-'),
                    'photo'  => $faker->word(),
                    // 'path'  => $faker->image(storage_path('news'), 1920, 1280, null, false),
                    'path' => $faker->image($filepath, 400, 300, null, false),
                    'date'  => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                    'description'  => $faker->paragraph($nbSentences = 3, $variableNbSentences = true),
                ]);
            }
        }
    }
}
