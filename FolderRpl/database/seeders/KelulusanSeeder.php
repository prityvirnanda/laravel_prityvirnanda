<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KelulusanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('kelulusan')->insert([
            'profil' => 'Information Security Risk Analyst',
            'capaian' => 'Seorang analis risiko keamanan informasi, tugas Anda adalah membantu menilai setiap potensi ancaman dan menentukan apakah sistem jaringan Anda saat ini rentan terhadap ancaman tersebut atau tidak. '
        ]);
    }
}
