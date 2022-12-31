<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
use App\Models\Matkul;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Data Mata Kuliah
        Mahasiswa::create([
            'nim'       => '01',
            'nama'      => 'Steven Gerrard',
            'umur'      => '20',
            'alamat'    => 'Bougenville Street',
            'kota'      => 'Liverpool',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Ilmu Komunikasi',
        ]);
        Mahasiswa::create([
            'nim'       => '02',
            'nama'      => 'Angelina Jollie',
            'umur'      => '21',
            'alamat'    => 'Merpati Street',
            'kota'      => 'Seattle',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Sistem Informasi',
        ]);
        Mahasiswa::create([
            'nim'       => '03',
            'nama'      => 'Paul McCartney',
            'umur'      => '22',
            'alamat'    => 'Louisa Street',
            'kota'      => 'Southampton',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Teknik Informatika',
        ]);
        Mahasiswa::create([
            'nim'       => '04',
            'nama'      => 'Joko Susanto',
            'umur'      => '19',
            'alamat'    => 'Mekarsari Street',
            'kota'      => 'Sidoarjo',
            'kelas'     => 'Sore',
            'jurusan'   => 'Teknik Elektro',
        ]);
        Mahasiswa::create([
            'nim'       => '05',
            'nama'      => 'Yohannes Anton',
            'umur'      => '20',
            'alamat'    => 'Puspa Regency',
            'kota'      => 'Surabaya',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Ekonomi',
        ]);
        Mahasiswa::create([
            'nim'       => '06',
            'nama'      => 'Budi Susanto',
            'umur'      => '25',
            'alamat'    => 'Mijen',
            'kota'      => 'Bogor',
            'kelas'     => 'Sore',
            'jurusan'   => 'Sistem Informasi',
        ]);
        Mahasiswa::create([
            'nim'       => '07',
            'nama'      => 'Ahmad Dhani',
            'umur'      => '27',
            'alamat'    => 'Dukuh Sari',
            'kota'      => 'Jakarta',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Psikolog',
        ]);
        Mahasiswa::create([
            'nim'       => '08',
            'nama'      => 'Mohammad Salah',
            'umur'      => '21',
            'alamat'    => 'Sempangan Raya',
            'kota'      => 'Madiun',
            'kelas'     => 'Sore',
            'jurusan'   => 'Teknik Elektro',
        ]);
        Mahasiswa::create([
            'nim'       => '09',
            'nama'      => 'Arya Wiguna',
            'umur'      => '20',
            'alamat'    => 'Papandayan',
            'kota'      => 'Semarang',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Manajemen',
        ]);
        Mahasiswa::create([
            'nim'       => '10',
            'nama'      => 'Nanar Tyrta',
            'umur'      => '19',
            'alamat'    => 'Ungaran Raya',
            'kota'      => 'Kabupaten Semarang',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Ekonomi',
        ]);
        Mahasiswa::create([
            'nim'       => '11',
            'nama'      => 'Joko Susanto',
            'umur'      => '25',
            'alamat'    => 'Sendang Mulyo',
            'kota'      => 'Semarang',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Sistem Informasi',
        ]);
        Mahasiswa::create([
            'nim'       => '12',
            'nama'      => 'Imad Ridlo',
            'umur'      => '20',
            'alamat'    => 'Majapahit Raya',
            'kota'      => 'Jakarta',
            'kelas'     => 'Sore',
            'jurusan'   => 'Ilmu Komunikasi',
        ]);
        Mahasiswa::create([
            'nim'       => '13',
            'nama'      => 'Dimas Ardianto',
            'umur'      => '22',
            'alamat'    => 'Sendang Guwo',
            'kota'      => 'Semarang',
            'kelas'     => 'Sore',
            'jurusan'   => 'Ekonomi',
        ]);
        Mahasiswa::create([
            'nim'       => '14',
            'nama'      => 'Agus Prasetyo',
            'umur'      => '21',
            'alamat'    => 'Pandanaran',
            'kota'      => 'Bantul',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Teknik Pertanian',
        ]);
        Mahasiswa::create([
            'nim'       => '15',
            'nama'      => 'Anggi Novi Putri',
            'umur'      => '23',
            'alamat'    => 'Gajah Mada',
            'kota'      => 'Semarang',
            'kelas'     => 'Sore',
            'jurusan'   => 'Psikologi',
        ]);
        // Data Mata Kuliah
        Matkul::create([
           'kode'       => 'TISI07',
           'matkul'    => 'Analisis Pemrograman Berbasis Objek',
           'dosen'      => 'Very Christioko',
           'sks'        => '4',
           'total_mhs'  => '40',
           'ruangan'    => 'M.3.3'
        ]);
        Matkul::create([
           'kode'       => 'TISI08',
           'matkul'    => 'Pemrograman Framework',
           'dosen'      => 'Agus Hartanto',
           'sks'        => '4',
           'total_mhs'  => '35',
           'ruangan'    => 'M.3.2'
        ]);
        Matkul::create([
           'kode'       => 'TISI09',
           'matkul'    => 'Bahasa Indonesia',
           'dosen'      => 'Agus Harianto',
           'sks'        => '2',
           'total_mhs'  => '45',
           'ruangan'    => 'G.1.1'
        ]);
        Matkul::create([
           'kode'       => 'TISI10',
           'matkul'    => 'Open Source System',
           'dosen'      => 'Alaudin Nizam',
           'sks'        => '3',
           'total_mhs'  => '30',
           'ruangan'    => 'M.2.3'
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
