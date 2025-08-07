<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    // Menggunakan trait HasFactory untuk membuat factory Anggota
    use HasFactory;

    /**
     * Properti $table untuk menentukan nama tabel di database.
     * Secara default, Laravel akan menggunakan versi jamak (plural) dari nama model (anggota -> anggotas).
     * Jika nama tabel Anda "anggota", Anda bisa menentukannya secara eksplisit.
     * Contoh: protected $table = 'anggota';
     */

    /**
     * Properti $fillable menentukan atribut yang dapat diisi secara massal (mass assignable).
     * Ini adalah praktik keamanan yang penting.
     * Kita akan menambahkan semua kolom yang bisa diisi oleh pengguna.
     */
    protected $fillable = [
        'nama',
        'email',
        'telepon',
        'alamat',
    ];

    /**
     * Properti $casts adalah array yang mengonversi atribut tertentu ke tipe data yang umum.
     * Contoh:
     * protected $casts = [
     * 'email_verified_at' => 'datetime',
     * ];
     *
     * Untuk model ini, kita tidak memerlukan casting khusus, namun penting untuk mengetahuinya.
     */
}

