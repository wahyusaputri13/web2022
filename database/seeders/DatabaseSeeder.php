<?php

namespace Database\Seeders;

use App\Models\RelatedLink;
use Illuminate\Database\Seeder;
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
            ComCodes::class,
        ]);

        DB::table('websites')->insert([
            'web_name' => 'Website Resmi Kabupaten Wonosobo',
            'web_description' => '"Hello World!"',
            'email' => 'pemkab@wonosobokab.go.id',
            'address' => 'JL. Soekarno-Hatta, No. 2-4, Kel. Wonosobo Timur, Kec. Wonosobo, Kabupaten Wonosobo, Jawa Tengah 56311',
            'phone' => '(0286) 321345',
            'instagram' => 'https://www.instagram.com/wonosobohebat/',
            'twitter' => 'https://twitter.com/wonosobohebat',
            'facebook' => 'https://www.facebook.com/wonosobohebat',
            'youtube' => 'https://www.youtube.com/@OfficialWonosoboTV',
            'latitude' => '-7.358664418685239',
            'longitude' => '109.9047188187568',
            'open_hours' => "Senin - Kamis (07:00 - 16:00) Jum'at (07:00 - 11:00)",
        ]);

        $related = [
            [
                'name' => 'JDIH',
                'url' => 'https://jdih.wonosobokab.go.id/',
            ],
            [
                'name' => 'FLLAJ',
                'url' => 'https://fllaj.wonosobokab.go.id/',
            ],
            [
                'name' => 'CASN',
                'url' => 'https://casn.wonosobokab.go.id/',
            ],
            [
                'name' => 'JELAJAH',
                'url' => 'https://www.jelajahwonosobo.com/',
            ],
            [
                'name' => 'CEK HOAX',
                'url' => 'https://www.kominfo.go.id/content/all/laporan_isu_hoaks',
            ],
            [
                'name' => 'LAPORBUP',
                'url' => 'https://laporbupati.wonosobokab.go.id/',
            ]
        ];

        foreach ($related as $rr) {
            RelatedLink::create($rr);
        }
    }
}
