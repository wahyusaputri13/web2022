<?php

namespace Database\Seeders;

use App\Models\Menu;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Role;
use App\Models\Submenu;
use App\Models\Themes;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $themes = [
            [
                'name' => 'FlexStart',
                'image' => 'img/FlexStart.png'
            ],
            [
                'name' => 'HeroBiz',
                'image' => 'img/HeroBiz.png'
            ],
            [
                'name' => 'Arsha',
                'image' => 'img/arsha.png'
            ]
        ];

        foreach ($themes as $datum) {
            Themes::create($datum);
        }

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
                'menu' => 'Website'
            ],
            [
                'menu' => 'Postings'
            ],
            [
                'menu' => 'Dashboard',
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
                'title' => 'Themes',
                'url' => '/themes',
                'icon' => 'palette',
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
            ],
            [
                'role_id' => '2',
                'menu_id' => '2'
            ],
            [
                'role_id' => '2',
                'menu_id' => '3'
            ]
        ];

        foreach ($user_access as $datum) {
            DB::table('user_access_menus')->insert($datum);
        }

        // \App\Models\User::factory(10)->create();
        DB::table('websites')->insert([
            'web_name' => 'Web2022',
            'web_description' => '"Hello World!"',
            'email' => 'superadmin@app.com',
            'address' => 'On Earth!',
            'phone' => '-',
            'instagram' => '#',
            'twitter' => '#',
            'facebook' => '#',
            'youtube' => '#',
            'url_stream' => '#',
            'themes_front' => 'FlexStart',
            'themes_back' => 'back.a',
        ]);

        $user = [
            [
                'name' => 'superadmin',
                'email' => 'superadmin@app.com',
                'password' => bcrypt('password'),
                'role_id' => 1
            ],
            [
                'name' => 'admin',
                'email' => 'admin@app.com',
                'password' => bcrypt('password'),
                'role_id' => 2
            ]
        ];

        foreach ($user as $datum) {
            User::create($datum);
        }
    }
}
