<?php

namespace Database\Seeders;

use App\Models\Buku;
use App\Models\Identitas;
use App\Models\Kategori;
use App\Models\Pemberitahuan;
use App\Models\Peminjaman;
use App\Models\Penerbit;
use App\Models\Pesan;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'kode' => 'Adminsatu',
            'fullname' => 'Farrel Tan Eleivlin',
            'username' => 'Farrel',
            'role' => 'Admin',
            'foto' => '',
            'password' => Hash::make('farrel123')
        ]);
                
        User::create([
            'kode' => 'KODE002',
            'nis' => '241003',
            'fullname' =>  'Asfariiwaldy',
            'username' => 'Far',
            'password' => 'far241003',
            'kelas' => 'XII RPL',
            'alamat' => 'Jl.Lubang Buaya, Jakarta Timur',
            'role' => 'User',
            'join_date' => '2023-12-01',
            'foto' => '',
            'password' => Hash::make('far123')
        ]);

        Kategori::create([
           'kode' => 'Romance',
           'nama' => 'Romance', 
        ]);

        Kategori::create([
            'kode' => 'Comedy',
            'nama' => 'Comedy',
        ]);

        Kategori::create([
            'kode' => 'Slice of Life',
            'nama' => 'Slice of Life',
        ]);

        Penerbit::create([
            'kode' => 'Gramedia',
            'nama' => 'Gramedia',
        ]);

        Penerbit::create([
            'kode' => 'Erlangga',
            'nama' => 'Erlangga',
        ]);

        Penerbit::create([
            'kode' => 'Deepublish',
            'nama' => 'Deepublish',
        ]);

        Buku::create([
            'judul' => 'Romeo and Juliet',
            'kategori_id' => 1,
            'penerbit_id' => 1, 
            'pengarang' => 'William Shakespeare',
            'tahun_terbit' => '2001',
            'isbn' => '0001',
            'j_buku_baik' => 87,
            'j_buku_rusak' => 3,
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Mawar itu Merah, Violet itu Biru',
            'kategori_id' => 2,
            'penerbit_id' => 2, 
            'pengarang' => 'Patrick Star',
            'tahun_terbit' => '2002',
            'isbn' => '0002',
            'j_buku_baik' => 80,
            'j_buku_rusak' => 10,
            'foto' => '',
        ]);

        Buku::create([
            'judul' => 'Can u Hear Me',
            'kategori_id' => 3,
            'penerbit_id' => 3, 
            'pengarang' => 'Lea Chiarachel',
            'tahun_terbit' => '2003',
            'isbn' => '0003',
            'j_buku_baik' => 89,
            'j_buku_rusak' => 1,
            'foto' => '',
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 1,
            'tanggal_peminjaman' => '2023-01-01',
            'tanggal_pengembalian' => '2023-01-10',
            'kondisi_buku_saat_dipinjam' => 'Baik',
            'kondisi_buku_saat_dikembalikan' => 'Baik',
            'denda' => 0,
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 2,
            'tanggal_peminjaman' => '2023-02-02',
            'tanggal_pengembalian' => '2023-02-20',
            'kondisi_buku_saat_dipinjam' => 'Baik',
            'kondisi_buku_saat_dikembalikan' => 'Rusak',
            'denda' => 50000,
        ]);

        Peminjaman::create([
            'user_id' => 2,
            'buku_id' => 3,
            'tanggal_peminjaman' => '2023-03-03',
            'tanggal_pengembalian' => '2023-03-30',
            'kondisi_buku_saat_dipinjam' => 'Baik',
            'kondisi_buku_saat_dikembalikan' => 'Baik',
            'denda' => 0,
        ]);

        Pemberitahuan::create([
            'isi' => 'Server sedang Diperbaiki',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Server sudah Diperbaiki',
            'status' => 'aktif',
        ]);

        Pemberitahuan::create([
            'isi' => 'Server sedang Mati',
            'status' => 'nonaktif',
        ]);

        Pesan::create([
            'penerima_id' => 2,
            'pengirim_id' => 1,
            'judul' => 'Terimakasih sudah meminjam buku kami, selamat membaca dan enjoy!',
            'isi' => 'Tolong kembalikan tepat waktu!',
            'status' => 'terkirim',
            'tanggal_kirim' => '2022-04-01',
        ]);

        Identitas::create([
            'nama_app' =>  'Perpus SMKN10',
            'alamat_app' => 'Jalan Cawang, Cilitan, Jakarta Timur',
            'email_app' => 'smkn10jkt@gmail.com',
            'nomor_hp'=> '089764288622',
            'foto' => '',
        ]);
        
    }
}
