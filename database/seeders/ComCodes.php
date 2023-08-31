<?php

namespace Database\Seeders;

use App\Models\ComCodes as CS;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ComCodes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['code_cd' => 'STATUS_ST_01', 'code_nm' => 'Menunggu Persetujuan', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_02', 'code_nm' => 'Disetujui', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_03', 'code_nm' => 'Ditolak', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_04', 'code_nm' => 'Dibatalkan', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'HIGHLIGHT_NEWS_0', 'code_nm' => 'FALSE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '0'],
            ['code_cd' => 'HIGHLIGHT_NEWS_1', 'code_nm' => 'TRUE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '1'],
            ['code_cd' => 'KATEGORI_NEWS_0', 'code_nm' => 'SAMBUTAN', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_1', 'code_nm' => 'DOKUMENTASI', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_2', 'code_nm' => 'PRESS RELEASE', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_3', 'code_nm' => 'NOTULENSI', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_4', 'code_nm' => 'BERITA', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_0', 'code_nm' => 'Laki - Laki', 'code_group' => 'JENIS_KELAMIN', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_1', 'code_nm' => 'Perempuan', 'code_group' => 'JENIS_KELAMIN', 'code_value' => ''],
            ['code_cd' => 'PROTOKOL DAN KOMUNIKASI PIMPINAN', 'code_nm' => 'PROTOKOL DAN KOMUNIKASI PIMPINAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'KESEJAHTERAAN RAKYAT', 'code_nm' => 'KESEJAHTERAAN RAKYAT', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'HUKUM', 'code_nm' => 'HUKUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PEMERINTAHAN', 'code_nm' => 'PEMERINTAHAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'UMUM', 'code_nm' => 'UMUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'ADMINISTRASI PEMBANGUNAN', 'code_nm' => 'ADMINISTRASI PEMBANGUNAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'ORGANISASI', 'code_nm' => 'ORGANISASI', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PENGADAAN BARANG DAN JASA', 'code_nm' => 'PENGADAAN BARANG DAN JASA', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PEREKONOMIAN DAN SUMBER DAYA ALAM', 'code_nm' => 'PEREKONOMIAN DAN SUMBER DAYA ALAM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
        ];

        foreach ($data as $datum) {
            CS::create($datum);
        }
    }
}
