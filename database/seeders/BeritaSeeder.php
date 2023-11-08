<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class BeritaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
    DB::table('berita')->insert([
        'judul' => 'Penambahan Prodi Baru',
        'deskripsi' => 'Ada jurusan baru',
    ]);

    // Tambahkan data berita lainnya jika diperlukan
    }

}
