<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataDosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    DB::table('data_dosen')->insert([
        'nama_dosen' => 'Agus Tedyyana, M.Kom',
        'nip_nik' => '198510052015041001',
        'nidn' => '0005108501',
        'program_studi' => 'D4 Keamanan Sistem Informasi',
    ]);

    // Tambahkan data dosen lainnya jika diperlukan
    }

}
