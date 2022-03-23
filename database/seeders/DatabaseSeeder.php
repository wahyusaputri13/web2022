<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Submenu;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $role = [
            [
                'role' => 'Superadmin'
            ],
            [
                'role' => 'Admin'
            ]
        ];

        foreach ($role as $datum) {
            Role::create($datum);
        }

        $menus = [
            [
                'menu' => 'website'
            ],
            [
                'menu' => 'postings'
            ],
            [
                'menu' => 'dashboard',
                'menu_icon' => 'dashboard',
                'menu_url' => 'dashboard'
            ]
        ];

        foreach ($menus as $datum) {
            Menu::create($datum);
        }

        $submenus = [
            [
                'menu_id' => 1,
                'title' => 'Menu',
                'url' => '/menu',
                'icon' => 'menu',
                'is_active' => 1
            ],
            [
                'menu_id' => 1,
                'title' => 'Submenu',
                'url' => '/submenu',
                'icon' => 'subject',
                'is_active' => 1
            ],
            [
                'menu_id' => 1,
                'title' => 'Settings',
                'url' => '/settings',
                'icon' => 'settings',
                'is_active' => 1
            ],
            [
                'menu_id' => 1,
                'title' => 'Role',
                'url' => '/role',
                'icon' => 'assignment_ind',
                'is_active' => 1
            ],
            [
                'menu_id' => 1,
                'title' => 'User',
                'url' => '/user',
                'icon' => 'person',
                'is_active' => 1
            ],
            [
                'menu_id' => 2,
                'title' => 'News',
                'url' => '/news',
                'icon' => 'event_note',
                'is_active' => 1
            ],
            [
                'menu_id' => 2,
                'title' => 'Gallery',
                'url' => '/gallery',
                'icon' => 'collections',
                'is_active' => 1
            ]
        ];

        foreach ($submenus as $datum) {
            Submenu::create($datum);
        }

        $user_access = [
            [
                'role_id' => '1',
                'menu_id' => '1'
            ],
            [
                'role_id' => '1',
                'menu_id' => '2'
            ],
            [
                'role_id' => '1',
                'menu_id' => '3'
            ]
        ];

        foreach ($user_access as $datum) {
            DB::table('user_access_menu')->insert($datum);
        }

        // \App\Models\User::factory(10)->create();
        // DB::table('websites')->insert([
        //     'web_name' => 'Web2022',
        //     'web_description' => '"Hello World!"',
        //     'email' => 'superadmin@app.com',
        //     'address' => 'On Earth!',
        //     'phone' => '-',
        //     'instagram' => '#',
        //     'twitter' => '#',
        //     'facebook' => '#',
        //     'youtube' => '#',
        //     'url_stream' => '#',
        // ]);

        DB::table('users')->insert([
            'name' => 'superadmin',
            'email' => 'superadmin@app.com',
            'password' => bcrypt('password'),
            'role_id' => 1
        ]);
    }
}
