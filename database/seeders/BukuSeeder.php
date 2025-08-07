<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Buku;

class BukuSeeder extends Seeder
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        // Hapus semua data di tabel buku
        Buku::truncate();

        // Tambahkan kembali 4 data awal
        Buku::create([
            'judul' => 'Kisah Tanah Jawa',
            'penulis' => 'Tim Kisah Tanah Jawa',
            'penerbit' => 'GagasMedia',
            'tahun_terbit' => 2018,
        ]);

        Buku::create([
            'judul' => 'Anak Rantau',
            'penulis' => 'Ahmad Fuadi',
            'penerbit' => 'Falcon Publishing',
            'tahun_terbit' => 2017,
        ]);

        Buku::create([
            'judul' => 'Laskar Pelangi',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => 2005,
        ]);

        Buku::create([
            'judul' => 'Ayah',
            'penulis' => 'Andrea Hirata',
            'penerbit' => 'Bentang Pustaka',
            'tahun_terbit' => 2015,
        ]);
    }
}
