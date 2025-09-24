<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('biodatas')->insert([
            [ 
                'nama_lengkap' => 'Fakhri Ibnu Nabil', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-01-05', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Rancamanyar', 
                'telepon' => '083142353069', 
                'email' => 'fakhri.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Ilman Abidullah', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-07-09', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'BMI', 
                'telepon' => '083142353170', 
                'email' => 'ilman.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Rehan Ramadhan', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-10-02', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Banjaran', 
                'telepon' => '083142353071', 
                'email' => 'rehan.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Davin Gahisan Mustafiq', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-06-06', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Sayuran', 
                'telepon' => '083142353072', 
                'email' => 'davin.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Reihan Azka', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-11-04', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Rancamanyar', 
                'telepon' => '083142353073', 
                'email' => 'reihan.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Muhammad Jihad Putra Drajat', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-05-03', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'TKI', 
                'telepon' => '083142353074', 
                'email' => 'jihad.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Dikri', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-08-03', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Banjaran', 
                'telepon' => '083142353075', 
                'email' => 'dikri.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Aliva', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-12-15', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'TCI', 
                'telepon' => '083142353076', 
                'email' => 'aliva.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Rakha Alfarizqi Zahir', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2009-04-20', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Cangkuang', 
                'telepon' => '083142353077', 
                'email' => 'rakha.@gmail.com',
            ],
            [ 
                'nama_lengkap' => 'Teguh', 
                'jenis_kelamin' => 'Laki-laki', 
                'tanggal_lahir' => '2008-07-20', 
                'tempat_lahir' => 'Bandung', 
                'agama' => 'Islam', 
                'alamat' => 'Rancamanyar', 
                'telepon' => '083142353078', 
                'email' => 'teguh.@gmail.com',
            ],
        ]);
    }
}
