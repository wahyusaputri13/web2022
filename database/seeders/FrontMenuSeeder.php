<?php

namespace Database\Seeders;

use App\Models\FrontMenu;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class FrontMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('front_menus')->truncate();

        $front_menu = [
            [
                'menu_name' => 'Main Menu'
            ],

            [
                'menu_parent' => '1',
                'menu_name' => 'Tentang Kami',
                'menu_url' => Str::slug('Tentang Kami', '-')
            ],
            [
                'menu_parent' => '2',
                'menu_name' => 'Fasilitas Publik',
                'menu_url' => Str::slug('Fasilitas Publik', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Ruang Publik',
                'menu_url' => Str::slug('Ruang Publik', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Layanan Umum',
                'menu_url' => Str::slug('Layanan Umum', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Layanan Kesehatan',
                'menu_url' => Str::slug('Layanan Kesehatan', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Layanan Perbankan',
                'menu_url' => Str::slug('Layanan Perbankan', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Layanan Transparansi',
                'menu_url' => Str::slug('Layanan Transparansi', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Tempat Ibadah',
                'menu_url' => Str::slug('Tempat Ibadah', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Radio',
                'menu_url' => Str::slug('Radio', '-')
            ],
            [
                'menu_parent' => '3',
                'menu_name' => 'Jelajah Wonosobo',
                'link' => 1,
                'menu_url' => 'https://www.jelajahwonosobo.com/'
            ],

            [
                'menu_parent' => '2',
                'menu_name' => 'Layanan Publik Online',
                'menu_url' => Str::slug('Layanan Publik Online', '-')
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'Harga Kebutuhan Pokok',
                'link' => 1,
                'menu_url' => 'https://dashboard.wonosobokab.go.id/dashboard/disdagkopukm'
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'Lalu Lintas Wonosobo',
                'link' => 1,
                'menu_url' => 'https://lalulintas.wonosobokab.go.id/'
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'Open Data Desa',
                'link' => 1,
                'menu_url' => 'https://datadesa.wonosobokab.go.id/'
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'Cek Status Perizinan',
                'link' => 1,
                'menu_url' => 'https://dpmptsp.wonosobokab.go.id/postings/detail/53/CEK_STATUS_IZIN_ONLINE.HTML'
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'Pelayanan Dinda Cantik',
                'link' => 1,
                'menu_url' => 'https://bppkad.wonosobokab.go.id/index.php/185-pelayanan-online'
            ],
            [
                'menu_parent' => '12',
                'menu_name' => 'e-Lapak',
                'link' => 1,
                'menu_url' => 'https://e-lapak.wonosobokab.go.id/'
            ],

            [
                'menu_parent' => '2',
                'menu_name' => 'Potensi Daerah',
                'menu_url' => Str::slug('Potensi Daerah', '-')
            ],
            [
                'menu_parent' => '19',
                'menu_name' => 'Potensi Investasi Kabupaten Wonosobo',
                'menu_url' => Str::slug('Potensi Investasi Kabupaten Wonosobo', '-')
            ],
            [
                'menu_parent' => '19',
                'menu_name' => 'Daftar Investasi',
                'menu_url' => Str::slug('Daftar Investasi', '-')
            ],
            [
                'menu_parent' => '21',
                'menu_name' => 'Penyertaan Modal',
                'menu_url' => Str::slug('Penyertaan Modal', '-')
            ],
            [
                'menu_parent' => '21',
                'menu_name' => 'Investasi Usaha',
                'menu_url' => Str::slug('Investasi Usaha', '-')
            ],

            [
                'menu_parent' => '2',
                'menu_name' => 'Selayang Pandang',
                'menu_url' => Str::slug('Selayang Pandang', '-')
            ],
            [
                'menu_parent' => '24',
                'menu_name' => 'Sejarah Singkat Kabupaten Wonosobo',
                'menu_url' => Str::slug('Sejarah Singkat Kabupaten Wonosobo', '-')
            ],
            [
                'menu_parent' => '24',
                'menu_name' => 'Arti Lambang Daerah',
                'menu_url' => Str::slug('Arti Lambang Daerah', '-')
            ],
            [
                'menu_parent' => '24',
                'menu_name' => 'Peta Pengembangan Wilayah',
                'menu_url' => Str::slug('Peta Pengembangan Wilayah', '-')
            ],
            [
                'menu_parent' => '24',
                'menu_name' => 'Geografis Kabupaten Wonosobo',
                'menu_url' => Str::slug('Geografis Kabupaten Wonosobo', '-')
            ],
            [
                'menu_parent' => '24',
                'menu_name' => 'Visi Misi',
                'menu_url' => Str::slug('Visi Misi', '-')
            ],

            [
                'menu_parent' => '2',
                'menu_name' => 'Geopark Dieng',
                'menu_url' => 'https://geoparkdieng.com/',
                'link' => '1',
            ],
            [
                'menu_parent' => '2',
                'menu_name' => 'Agenda Badan Publik',
                'link' => 1,
                'menu_url' => 'https://panda.wonosobokab.go.id/red'
            ],

            [
                'menu_parent' => '1',
                'menu_name' => 'Kepemerintahan',
                'menu_url' => Str::slug('Kepemerintahan', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'Profil Bupati dan Wakil Bupati',
                'menu_url' => Str::slug('Profil Bupati dan Wakil Bupati', '-')
            ],
            [
                'menu_parent' => '33',
                'menu_name' => 'Bupati',
                'menu_url' => Str::slug('Bupati', '-')
            ],
            [
                'menu_parent' => '33',
                'menu_name' => 'Wakil Bupati',
                'menu_url' => Str::slug('Wakil Bupati', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'Forkopimda Wonosobo',
                'menu_url' => Str::slug('Forkopimda Wonosobo', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'DPRD',
                'menu_url' => Str::slug('DPRD', '-')
            ],
            [
                'menu_parent' => '37',
                'menu_name' => 'Profil Pimpinan DPRD Kab Wonosobo 2020-2024',
                'menu_url' => Str::slug('Profil Pimpinan DPRD Kab Wonosobo 2020-2024', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'STAF AHLI BUPATI',
                'menu_url' => Str::slug('STAF AHLI BUPATI', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'OPD',
                'menu_url' => Str::slug('OPD', '-')
            ],
            [
                'menu_parent' => '40',
                'menu_name' => 'Sekretariat Daerah Wonosobo',
                'menu_url' => Str::slug('Sekretariat Daerah Wonosobo', '-')
            ],
            [
                'menu_parent' => '40',
                'menu_name' => 'Perangkat Daerah Wonosobo',
                'menu_url' => Str::slug('Perangkat Daerah Wonosobo', '-')
            ],
            [
                'menu_parent' => '40',
                'menu_name' => 'Camat se-Kab. Wonosobo',
                'menu_url' => Str::slug('Camat se-Kab. Wonosobo', '-')
            ],
            [
                'menu_parent' => '40',
                'menu_name' => 'Tupoksi OPD',
                'menu_url' => Str::slug('Tupoksi OPD', '-')
            ],
            [
                'menu_parent' => '32',
                'menu_name' => 'Produk Hukum',
                'menu_url' => Str::slug('Produk Hukum', '-')
            ],
            [
                'menu_parent' => '45',
                'menu_name' => 'JDIH Wonosobo',
                'menu_url' => 'https://jdih.wonosobokab.go.id/',
                'link' => 1
            ],
            [
                'menu_parent' => '45',
                'menu_name' => 'Kerjasama Daerah',
                'link' => 1,
                'menu_url' => 'https://asiksobo.wonosobokab.go.id/'
            ],
            [
                'menu_parent' => '1',
                'menu_name' => 'Berita',
                'link' => 1,
                'menu_url' => '/newsall'
            ],
            [
                'menu_parent' => '1',
                'menu_name' => 'Transparansi Anggaran',
                'menu_url' => Str::slug('Transparansi Anggaran', '-')
            ],
            [
                'menu_parent' => '1',
                'menu_name' => 'Info',
                'menu_url' => Str::slug('Info', '-')
            ],
            [
                'menu_parent' => '1',
                'menu_name' => 'PPID',
                'menu_url' => Str::slug('PPID', '-')
            ],

            [
                'menu_parent' => '51',
                'menu_name' => 'Profil PPID',
                'menu_url' => Str::slug('Profil PPID', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Profil PPID',
                'menu_url' => Str::slug('Profil PPID', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Profil',
                'menu_url' => Str::slug('Profil', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Maklumat PPID',
                'menu_url' => Str::slug('Maklumat PPID', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Visi Misi',
                'menu_url' => Str::slug('Visi Misi', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Tugas Pokok dan Fungsi',
                'menu_url' => Str::slug('Tugas Pokok dan Fungsi', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Bagan Struktur',
                'menu_url' => Str::slug('Bagan Struktur', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Dasar Hukum Pembentukan',
                'menu_url' => Str::slug('Dasar Hukum Pembentukan', '-')
            ],
            [
                'menu_parent' => '52',
                'menu_name' => 'Daftar PPID Pelaksana',
                'menu_url' => Str::slug('Daftar PPID Pelaksana', '-')
            ],
            [
                'menu_parent' => '51',
                'menu_name' => 'Daftar Informasi Publik',
                'menu_url' => Str::slug('Daftar Informasi Publik', '-')
            ],
            [
                'menu_parent' => '51',
                'menu_name' => 'Regulasi PPID',
                'menu_url' => Str::slug('Regulasi PPID', '-')
            ],
            [
                'menu_parent' => '62',
                'menu_name' => 'Regulasi Informasi Publik',
                'menu_url' => Str::slug('Regulasi Informasi Publik', '-')
            ],
            [
                'menu_parent' => '51',
                'menu_name' => 'Pelayanan Informasi',
                'menu_url' => Str::slug('Pelayanan Informasi', '-')
            ],

        ];

        foreach ($front_menu as $menu) {
            FrontMenu::create($menu);
        }
    }
}
