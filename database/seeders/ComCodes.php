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
            ['code_cd' => 'PEMINJAMAN_ST_01', 'code_nm' => 'Telah Dikembalikan', 'code_group' => 'PEMINJAMAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEMINJAMAN_ST_02', 'code_nm' => 'Belum Dikembalikan', 'code_group' => 'PEMINJAMAN_ST', 'code_value' => ''],
            ['code_cd' => 'PEMINJAMAN_ST_03', 'code_nm' => 'Dikembalikan Sebagian', 'code_group' => 'PEMINJAMAN_ST', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_01', 'code_nm' => 'Server Hardware Maintanace', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_02', 'code_nm' => 'Server Software Maintanace', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_03', 'code_nm' => 'Hanya Berkunjung', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_04', 'code_nm' => 'Server IP (Client)', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_05', 'code_nm' => 'Server Hostname (Client)', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'KEPERLUAN_TP_06', 'code_nm' => 'Penyelesaian Masalah', 'code_group' => 'KEPERLUAN_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_01', 'code_nm' => 'KTP', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_02', 'code_nm' => 'SIM', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'IDENTITY_TP_03', 'code_nm' => 'Passport', 'code_group' => 'IDENTITY_TP', 'code_value' => ''],
            ['code_cd' => 'PROSESOR_TP_01', 'code_nm' => 'Dual Core Processor', 'code_group' => 'PROSESOR_TP', 'code_value' => ''],
            ['code_cd' => 'PROSESOR_TP_02', 'code_nm' => 'Quad Core Processor', 'code_group' => 'PROSESOR_TP', 'code_value' => ''],
            ['code_cd' => 'HARDISK_TP_01', 'code_nm' => '20 GB', 'code_group' => 'HARDISK_TP', 'code_value' => ''],
            ['code_cd' => 'HARDISK_TP_02', 'code_nm' => '40 GB', 'code_group' => 'HARDISK_TP', 'code_value' => ''],
            ['code_cd' => 'RAM_TP_01', 'code_nm' => '1 GB', 'code_group' => 'RAM_TP', 'code_value' => ''],
            ['code_cd' => 'RAM_TP_02', 'code_nm' => '2 GB', 'code_group' => 'RAM_TP', 'code_value' => ''],
            ['code_cd' => 'AKSESNONFISIK_TP_01', 'code_nm' => 'SSH', 'code_group' => 'AKSESNONFISIK_TP', 'code_value' => ''],
            ['code_cd' => 'AKSESNONFISIK_TP_02', 'code_nm' => 'Remote Desktop', 'code_group' => 'AKSESNONFISIK_TP', 'code_value' => ''],
            // ['code_cd' => 'JENISLAYANAN_TP_01', 'code_nm' => 'Layanan Hosting', 'code_group' => 'JENISLAYANAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_02', 'code_nm' => 'Layanan Sub Domain', 'code_group' => 'JENISLAYANAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_03', 'code_nm' => 'Layanan Cpanel', 'code_group' => 'JENISLAYANAN_TP', 'code_value' => ''],
            ['code_cd' => 'JENISLAYANAN_TP_04', 'code_nm' => 'Layanan Email', 'code_group' => 'JENISLAYANAN_TP', 'code_value' => ''],
            ['code_cd' => 'TIKET_TP_01', 'code_nm' => 'Jaringan', 'code_group' => 'TIKET_TP', 'code_value' => ''],
            ['code_cd' => 'TIKET_TP_02', 'code_nm' => 'Website', 'code_group' => 'TIKET_TP', 'code_value' => ''],
            ['code_cd' => 'TIKET_TP_03', 'code_nm' => 'Hardware', 'code_group' => 'TIKET_TP', 'code_value' => ''],
            ['code_cd' => 'PRIORITY_TP_01', 'code_nm' => 'Critical', 'code_group' => 'PRIORITY_TP', 'code_value' => '4'],
            ['code_cd' => 'PRIORITY_TP_02', 'code_nm' => 'High', 'code_group' => 'PRIORITY_TP', 'code_value' => '3'],
            ['code_cd' => 'PRIORITY_TP_03', 'code_nm' => 'Medium', 'code_group' => 'PRIORITY_TP', 'code_value' => '2'],
            ['code_cd' => 'PRIORITY_TP_04', 'code_nm' => 'Low', 'code_group' => 'PRIORITY_TP', 'code_value' => '1'],
            ['code_cd' => 'TIKET_ST_01', 'code_nm' => 'Terbuka', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_02', 'code_nm' => 'Dikerjakan', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'TIKET_ST_03', 'code_nm' => 'Selesai', 'code_group' => 'TIKET_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_01', 'code_nm' => 'Menunggu Persetujuan', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_02', 'code_nm' => 'Disetujui', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_03', 'code_nm' => 'Ditolak', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'STATUS_ST_04', 'code_nm' => 'Dibatalkan', 'code_group' => 'STATUS_ST', 'code_value' => ''],
            ['code_cd' => 'PEMINJAMANST_00', 'code_nm' => 'Tersedia', 'code_group' => 'PEMINJAMANST', 'code_value' => ''],
            ['code_cd' => 'PEMINJAMANST_01', 'code_nm' => 'Dipinjam', 'code_group' => 'PEMINJAMANST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_01', 'code_nm' => 'Informasi Berkala', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_02', 'code_nm' => 'Informasi Setiap Saat', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_03', 'code_nm' => 'Informasi Serta Merta', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'INFORMASI_ST_04', 'code_nm' => 'Informasi Dikecualikan', 'code_group' => 'INFORMASI_ST', 'code_value' => ''],
            ['code_cd' => 'ACARA_ST_01', 'code_nm' => 'Daring', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            ['code_cd' => 'ACARA_ST_02', 'code_nm' => 'Luring', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            ['code_cd' => 'ACARA_ST_03', 'code_nm' => 'Hybrid', 'code_group' => 'ACARA_ST', 'code_value' => ''],
            ['code_cd' => 'JARINGAN_ST_01', 'code_nm' => 'LAN', 'code_group' => 'JARINGAN_ST', 'code_value' => ''],
            ['code_cd' => 'JARINGAN_ST_02', 'code_nm' => 'FO', 'code_group' => 'JARINGAN_ST', 'code_value' => ''],
            ['code_cd' => 'LAYANAN_INTERNET_ST_01', 'code_nm' => 'Pemasangan Baru', 'code_group' => 'LAYANAN_INTERNET_ST', 'code_value' => ''],
            ['code_cd' => 'LAYANAN_INTERNET_ST_02', 'code_nm' => 'Perbaikan Jaringan', 'code_group' => 'LAYANAN_INTERNET_ST', 'code_value' => ''],
            ['code_cd' => 'DOMAIN_ST_01', 'code_nm' => 'wonosobokab.go.id', 'code_group' => 'DOMAIN_ST', 'code_value' => ''],
            ['code_cd' => 'DOMAIN_ST_02', 'code_nm' => 'wonosobokab.com', 'code_group' => 'DOMAIN_ST', 'code_value' => ''],
            ['code_cd' => 'ALAT_TP_01', 'code_nm' => 'TV', 'code_group' => 'ALAT_TP', 'code_value' => ''],
            ['code_cd' => 'ALAT_TP_02', 'code_nm' => 'Kamera Zoom', 'code_group' => 'ALAT_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_01', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA BERKALA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_02', 'code_nm' => 'INFORMASI WAJIB TERSEDIA SETIAP SAAT', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_03', 'code_nm' => 'INFORMASI WAJIB DIUMUMKAN SECARA SERTA MERTA', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'JENIS_INFORMASI_PUBLIK_TP_04', 'code_nm' => 'DAFTAR INFORMASI YANG DIKECUALIKAN', 'code_group' => 'JENIS_INFORMASI_PUBLIK_TP', 'code_value' => ''],
            ['code_cd' => 'BIDANG_ST_01', 'code_nm' => 'IKP (Informasi dan Komunikasi Publik)', 'code_group' => 'BIDANG_ST', 'code_value' => 'Konten Medsos IKP'],
            ['code_cd' => 'BIDANG_ST_02', 'code_nm' => 'Informatika', 'code_group' => 'BIDANG_ST', 'code_value' => 'DC Team'],
            ['code_cd' => 'BIDANG_ST_03', 'code_nm' => 'Sekretariat', 'code_group' => 'BIDANG_ST', 'code_value' => 'Sekretariat Diskominfo'],
            ['code_cd' => 'BIDANG_ST_04', 'code_nm' => 'Kepala Dinas', 'code_group' => 'BIDANG_ST', 'code_value' => ''],
            ['code_cd' => 'IZIN_ST_01', 'code_nm' => 'Dinas Luar', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            ['code_cd' => 'IZIN_ST_02', 'code_nm' => 'Cuti Sakit', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            ['code_cd' => 'IZIN_ST_03', 'code_nm' => 'Cuti Sakit Opname', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            ['code_cd' => 'IZIN_ST_04', 'code_nm' => 'Cuti Karena Alasan Penting', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            ['code_cd' => 'IZIN_ST_05', 'code_nm' => 'Cuti Bersalin', 'code_group' => 'IZIN_ST', 'code_value' => ''],
            ['code_cd' => 'HIGHLIGHT_NEWS_0', 'code_nm' => 'FALSE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '0'],
            ['code_cd' => 'HIGHLIGHT_NEWS_1', 'code_nm' => 'TRUE', 'code_group' => 'HIGHLIGHT_NEWS', 'code_value' => '1'],
        ];

        foreach ($data as $datum) {
            CS::create($datum);
        }
    }
}
