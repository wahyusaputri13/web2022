<?php

namespace Database\Seeders;

use App\Models\GuestBook;
use App\Models\RelatedLink;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

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
            FrontMenuSeeder::class,
            ThemesSeeder::class,
            ComCodes::class,
            PermissionSeeder::class,
            ComponentSeeder::class,
        ]);

        DB::table('websites')->insert([
            'web_name' => 'Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu',
            'web_description' => '"Hello World!"',
            'email' => 'dpmptsp.wsb@gmail.com',
            'address' => 'Jl. Kartini No. 11, Kab. Wonosobo',
            'phone' => '(0286) 321059',
            'instagram' => 'https://www.instagram.com/dpmptsp_wonosobo/?hl=id',
            'twitter' => '#',
            'facebook' => '#',
            'youtube' => '#',
            'url_stream' => '#',
            'themes_front' => 'flexstart',
            'themes_back' => 'back.a',
            'open_hours' => "Senin - Jum'at (07:00 - 16:00 WIB) Jum'at (07:00 - 11:00 WIB)",
        ]);

        $related = [
            [
                'name' => 'Web OSS RBA',
                'url' => 'https://oss.go.id/',
            ],
            [
                'name' => 'Web Site Resmi PEMDA Wonosobo',
                'url' => 'https://wonosobokab.go.id/',
            ],
            [
                'name' => 'Web Site JDIH Kabupaten Wonosobo',
                'url' => 'https://jdih.wonosobokab.go.id/',
            ],
            [
                'name' => 'Web Site BKPM Pusat',
                'url' => 'https://www.bkpm.go.id/',
            ],
            [
                'name' => 'Web DPMPTSP Jateng',
                'url' => 'https://dpmptsp.jatengprov.go.id/',
            ],
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
