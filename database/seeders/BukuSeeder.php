<?php

namespace Database\Seeders; // Pastikan namespace ini benar

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Buku; 

class BukuSeeder extends Seeder // Pastikan nama class ini benar
{
    /**
     * Jalankan database seeds.
     */
    public function run(): void
    {
        // Hapus semua data yang ada di tabel 'buku' sebelum menambahkan yang baru.
        // Ini opsional, tapi berguna jika Anda ingin memulai dari awal setiap kali seeder dijalankan.
        // Buku::truncate(); 

        // Tambahkan data buku dummy
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
