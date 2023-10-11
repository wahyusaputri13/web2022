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
            FrontMenuSeeder::class,
            ThemesSeeder::class,
            ComCodes::class,
            PermissionSeeder::class,
            ComponentSeeder::class,
        ]);

        DB::table('websites')->insert([
            'web_name' => 'Kesbangpol',
            'web_description' => '-',
            'email' => '-',
            'address' => 'Wonosobo - The Soul Of Java',
            'phone' => '-',
            'instagram' => '-',
            'twitter' => '-',
            'facebook' => '-',
            'youtube' => '-',
            'url_stream' => '-',
            'themes_front' => 'medino',
            'themes_back' => 'material',
            'open_hours' => 'Monday - Thursday (07:00AM - 04:00PM) Friday (07:00AM - 11:00AM)',
        ]);

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
    }
}
