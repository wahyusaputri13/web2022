<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        DB::table('websites')->insert([
            'web_name' => 'PesonaFM',
            'web_description' => '"Selalu Ada Untuk Anda!"',
            'email' => 'admin@admin.com',
            'address' => 'Jl. Sabuk Alu, No 2 A, Komplek Kantor Diskominfo',
            'phone' => '-',
            'instagram' => 'https://www.instagram.com/pesonafmwonosobo/',
            'twitter' => '#',
            'facebook' => 'https://www.facebook.com/Pesona-FM-Wonosobo-921-FM-253009781384019/',
            'youtube' => 'https://www.youtube.com/channel/UCklHzjhKAwuLFJJXPorNidQ',
        ]);

        DB::table('users')->insert([
            'name' => 'isamaulanatantra',
            'email' => 'isamaulanatantra@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
