<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class SiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('siswas');
        DB::table('siswas')->insert([
            'nama' => 'aurora',
            'kelas' => '11',
            'jurusan' => 'PPLG',
            'nis' => '09876',
            'jenis_kelamin' => 'Perempuan',
            'alamat' => 'Depok',
            'notelepon' => '12345',
            'email' => 'aurora@gmail.com',
            'password' => 'hai',
            'wali_kelas' => 'jeno',
        ]);
    }
}
