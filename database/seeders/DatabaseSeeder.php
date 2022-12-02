<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Mahasiswa;
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
            'nim'       => '11',
            'nama'      => 'Ahmad Dhani',
            'umur'      => '27',
            'alamat'    => 'Dukuh Sari',
            'kota'      => 'Jakarta',
            'kelas'     => 'Pagi',
            'jurusan'   => 'Psikolog',
        ]);
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
