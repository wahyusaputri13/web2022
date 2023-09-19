<?php

namespace Database\Seeders;

use App\Models\GuestBook;
use App\Models\RelatedLink;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Themes;
use App\Models\User;
use Faker\Factory as Faker;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            // NewsSeeder::class,
            // GallerySeeder::class,
            FrontMenuSeeder::class,
            ThemesSeeder::class,
            ComCodes::class,
            PermissionSeeder::class,
            ComponentSeeder::class,
            // RegionSeeder::class,

            // untuk website satpol
            BidangTusiSeeder::class,
        ]);

        // \App\Models\User::factory(10)->create();
        DB::table('websites')->insert([
            'web_name' => 'Website Resmi Kabupaten Wonosobo',
            'web_description' => '"Hello World!"',
            'email' => 'pemkab@wonosobokab.go.id',
            'address' => 'JL. Soekarno-Hatta, No. 2-4, Kel. Wonosobo Timur, Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56311',
            'phone' => '(0286) 321345',
            'instagram' => 'https://www.instagram.com/diskominfo_wonosobo/?hl=id',
            'twitter' => 'https://twitter.com/wonosobohebat',
            'facebook' => 'https://www.facebook.com/wonosobohebat',
            'youtube' => 'https://www.youtube.com/channel/UC4tNqFlp_od17EE9HfBQQ3A',
            'url_stream' => '#',
            'themes_front' => 'flexstart',
            'themes_back' => 'back.a',
            'open_hours' => "Senin - Kamis (07:00 - 16:00) Jum'at (07:00 - 11:00)",
        ]);

        // kampung pancasila
        // DB::table('websites')->insert([
        //     'web_name' => 'KAMPUNG PANCASILA WONOSOBO',
        //     'web_description' => '"Semarak Kampung Pancasila Wonosobo penjaga Persatuan dan Kesatuan Bangsa!"',
        //     'email' => 'superadmin@app.com',
        //     'address' => 'Kodim 0707 Jl. Pemuda No.11, Wonosobo Timur, Wonosobo Tim., Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56311',
        //     'phone' => '(0286) 321019',
        //     'instagram' => '#',
        //     'twitter' => '#',
        //     'facebook' => '#',
        //     'youtube' => '#',
        //     'url_stream' => '#',
        //     'themes_front' => 'FlexStart',
        //     'themes_back' => 'back.a',
        // ]);

        $related = [
            [
                'name' => 'Website Pemkab Wonosobo',
                'url' => 'https://website.wonosobokab.go.id/',
            ],
            [
                'name' => 'Dashboard Smartcity',
                'url' => 'https://smartcity.wonosobokab.go.id/',
            ],
            [
                'name' => 'Website Diskominfo Wonosobo',
                'url' => 'https://diskominnfo.wonosobokab.go.id/',
            ]
        ];

        foreach ($related as $rr) {
            RelatedLink::create($rr);
        }

        $faker = Faker::create('id_ID');
        for ($i = 1; $i <= 10; $i++) {
            GuestBook::create([
                'name'  => $faker->name(),
                'date'  => $faker->dateTimeBetween($startDate = '-1 years', $endDate = 'now'),
                'instansi'  => $faker->company(3),
                'jumlah'  => $faker->randomDigit(),
                'keperluan'  => $faker->sentence()
            ]);
        }
    }
}
