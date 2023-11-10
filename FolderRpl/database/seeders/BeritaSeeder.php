<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('berita')->insert([
            'judul_berita' => 'Diklat Pembelajaran Berbasis Industri Angkatan II (Kedua) Tingkat SMK Negeri dan Swasta Se-Provinsi Riau Tahun 2023',
            'isi_berita' => '250 Mahasiswa Baru Jurusan Teknik Informatika Mengikuti Acara Pengenalan Jurusan Teknik Informatika Politeknik Negeri Bengkalis Tahun 2023'
        ]);
    }
}
