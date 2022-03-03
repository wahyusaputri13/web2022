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
            'email' => '-',
            'address' => '-',
            'phone' => '-',
            'instagram' => '#',
            'twitter' => '#',
            'facebook' => '#',
            'youtube' => '#',
        ]);

        DB::table('users')->insert([
            'name' => 'isamaulanatantra',
            'email' => 'isamaulanatantra@gmail.com',
            'password' => bcrypt('password'),
        ]);
    }
}
