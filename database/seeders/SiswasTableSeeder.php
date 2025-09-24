<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SiswasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('siswas')->insert([
            [
                'nama_lengkap' => 'Fakhri Ibnu Nabil', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-01-05', 
                'kelas' => 'XI Rpl 1',
            ],
            [
                'nama_lengkap' => 'Ilman Abidullah', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-05-20', 
                'kelas' => 'XI Rpl 1',
            ],
            [
                'nama_lengkap' => 'Davin Gahisan Mustafiq', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-06-06', 
                'kelas' => 'XI Rpl 1',
            ],
            [
                'nama_lengkap' => 'Rehan Ramadhan', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-06-10', 
                'kelas' => 'XI Rpl 1',
            ],
            [
                'nama_lengkap' => 'Rakha Alfarizqi Zahir', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-02-06', 
                'kelas' => 'XI Rpl 1',
            ],
        ]);
    }
}
