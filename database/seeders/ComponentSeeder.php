<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use App\Models\Component;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComponentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $component = [
            [
                'name' => 'Agenda',
                'active' => 1,
                'slug' => Str::slug('Agenda', '-'),
            ],
            [
                'name' => 'Buku Tamu',
                'active' => 1,
                'slug' => Str::slug('Buku Tamu', '-'),
            ],
            // [
            //     'name' => 'Seputar Wonosobo',
            //     'active' => 0,
            //     'slug' => Str::slug('Seputar Wonosobo', '-'),
            // ],

            // untuk website satpol
            [
                'name' => 'Public Complaints',
                'active' => 1,
                'slug' => Str::slug('Complaints', '-'),
            ],
            [
                'name' => 'Berita',
                'active' => 0,
                'slug' => Str::slug('Berita', '-'),
            ]
        ];

        foreach ($component as $cp) {
            Component::create($cp);
        }
    }
}
