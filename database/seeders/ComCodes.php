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
<<<<<<< HEAD
=======
            // ['code_cd' => 'PEMINJAMANST_00', 'code_nm' => 'Tersedia', 'code_group' => 'PEMINJAMANST', 'code_value' => ''],
            // ['code_cd' => 'PEMINJAMANST_01', 'code_nm' => 'Dipinjam', 'code_group' => 'PEMINJAMANST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_01', 'code_nm' => 'Informasi Berkala', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_02', 'code_nm' => 'Informasi Setiap Saat', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_03', 'code_nm' => 'Informasi Serta Merta', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_04', 'code_nm' => 'Informasi Dikecualikan', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            // ['code_cd' => 'ACARA_ST_01', 'code_nm' => 'Daring', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            // ['code_cd' => 'ACARA_ST_02', 'code_nm' => 'Luring', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            // ['code_cd' => 'ACARA_ST_03', 'code_nm' => 'Hybrid', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            // ['code_cd' => 'JARINGAN_ST_01', 'code_nm' => 'LAN', 'code_group' => 'JARINGAN_ST', 'code_value' => ''],
            // ['code_cd' => 'JARINGAN_ST_02', 'code_nm' => 'FO', 'code_group' => 'JARINGAN_ST', 'code_value' => ''],
            // ['code_cd' => 'LAYANAN_INTERNET_ST_01', 'code_nm' => 'Pemasangan Baru', 'code_group' => 'LAYANAN_INTERNET_ST', 'code_value' => ''],
            // ['code_cd' => 'LAYANAN_INTERNET_ST_02', 'code_nm' => 'Perbaikan Jaringan', 'code_group' => 'LAYANAN_INTERNET_ST', 'code_value' => ''],
            // ['code_cd' => 'DOMAIN_ST_01', 'code_nm' => 'wonosobokab.go.id', 'code_group' => 'DOMAIN_ST', 'code_value' => ''],
            // ['code_cd' => 'DOMAIN_ST_02', 'code_nm' => 'wonosobokab.com', 'code_group' => 'DOMAIN_ST', 'code_value' => ''],
            // ['code_cd' => 'ALAT_TP_01', 'code_nm' => 'TV', 'code_group' => 'ALAT_TP', 'code_value' => ''],
            // ['code_cd' => 'ALAT_TP_02', 'code_nm' => 'Kamera Zoom', 'code_group' => 'ALAT_TP', 'code_value' => ''],
            // ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_01', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA BERKALA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            // ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_02', 'code_nm' => 'INFORMASI WAJIB TERSEDIA SETIAP SAAT', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            // ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_03', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA SERTA MERTA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            // ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_04', 'code_nm' => 'DAFTAR INFORMASI YANG DIKECUALIKAN', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            // ['code_cd' => 'BIDANG_ST_01', 'code_nm' => 'IKP (Informasi dan Komunikasi Publik)', 'code_group' => 'BIDANG_ST', 'code_value' => 'Konten Medsos IKP'],
            // ['code_cd' => 'BIDANG_ST_02', 'code_nm' => 'Informatika', 'code_group' => 'BIDANG_ST', 'code_value' => 'DC Team'],
            // ['code_cd' => 'BIDANG_ST_03', 'code_nm' => 'Sekretariat', 'code_group' => 'BIDANG_ST', 'code_value' => 'Sekretariat Diskominfo'],
            // ['code_cd' => 'BIDANG_ST_04', 'code_nm' => 'Kepala Dinas', 'code_group' => 'BIDANG_ST', 'code_value' => ''],
            // ['code_cd' => 'IZIN_ST_01', 'code_nm' => 'Dinas Luar', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            // ['code_cd' => 'IZIN_ST_02', 'code_nm' => 'Cuti Sakit', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            // ['code_cd' => 'IZIN_ST_03', 'code_nm' => 'Cuti Sakit Opname', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            // ['code_cd' => 'IZIN_ST_04', 'code_nm' => 'Cuti Karena Alasan Penting', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            // ['code_cd' => 'IZIN_ST_05', 'code_nm' => 'Cuti Bersalin', 'code_group' => 'IZIN_ST', 'code_value' => ''],

>>>>>>> 9a0c57a (seeder)
            ['code_cd' => 'HIGHLIGHT_NEWS_0', 'code_nm' => 'FALSE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '0'],
            ['code_cd' => 'HIGHLIGHT_NEWS_1', 'code_nm' => 'TRUE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '1'],
            ['code_cd' => 'KATEGORI_NEWS_0', 'code_nm' => 'SAMBUTAN', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_1', 'code_nm' => 'DOKUMENTASI', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_2', 'code_nm' => 'PRESS RELEASE', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_3', 'code_nm' => 'NOTULENSI', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'KATEGORI_NEWS_4', 'code_nm' => 'BERITA', 'code_group' => 'KATEGORI_NEWS', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_0', 'code_nm' => 'Laki - Laki', 'code_group' => 'JENIS_KELAMIN', 'code_value' => ''],
            ['code_cd' => 'JENIS_KELAMIN_1', 'code_nm' => 'Perempuan', 'code_group' => 'JENIS_KELAMIN', 'code_value' => ''],
<<<<<<< HEAD
            ['code_cd' => 'PROTOKOL DAN KOMUNIKASI PIMPINAN', 'code_nm' => 'PROTOKOL DAN KOMUNIKASI PIMPINAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'KESEJAHTERAAN RAKYAT', 'code_nm' => 'KESEJAHTERAAN RAKYAT', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'HUKUM', 'code_nm' => 'HUKUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PEMERINTAHAN', 'code_nm' => 'PEMERINTAHAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'UMUM', 'code_nm' => 'UMUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'ADMINISTRASI PEMBANGUNAN', 'code_nm' => 'ADMINISTRASI PEMBANGUNAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'ORGANISASI', 'code_nm' => 'ORGANISASI', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PENGADAAN BARANG DAN JASA', 'code_nm' => 'PENGADAAN BARANG DAN JASA', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'PEREKONOMIAN DAN SUMBER DAYA ALAM', 'code_nm' => 'PEREKONOMIAN DAN SUMBER DAYA ALAM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_01', 'code_nm' => 'Informasi Berkala', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_02', 'code_nm' => 'Informasi Setiap Saat', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_03', 'code_nm' => 'Informasi Serta Merta', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_04', 'code_nm' => 'Informasi Dikecualikan', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
<<<<<<< HEAD
=======
            ['code_cd' => 'BAGIAN_NEWS_1', 'code_nm' => 'PROTOKOL DAN KOMUNIKASI PIMPINAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_2', 'code_nm' => 'KESEJAHTERAAN RAKYAT', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_3', 'code_nm' => 'HUKUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_4', 'code_nm' => 'PEMERINTAHAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_5', 'code_nm' => 'UMUM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_6', 'code_nm' => 'ADMINISTRASI PEMBANGUNAN', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_7', 'code_nm' => 'ORGANISASI', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_8', 'code_nm' => 'PENGADAAN BARANG DAN JASA', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
            ['code_cd' => 'BAGIAN_NEWS_9', 'code_nm' => 'PEREKONOMIAN DAN SUMBER DAYA ALAM', 'code_group' => 'BAGIAN_NEWS', 'code_value' => ''],
>>>>>>> 9d9f031 (select2 multiple)
=======
>>>>>>> c0266f7 (INSERT POSTINGAN BELUM)
        ];

        foreach ($data as $datum) {
            CS::create($datum);
        }
    }
}
