<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProduksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produks')->insert([
            [
                'name' => 'Roti Tawar',
                'description' => 'Roti Tawarku berkualitas enak',
                'price' => 2000,
                'stock' => 10,
            ],
            [
                'name' => 'Burger',
                'description' => 'Burger berkualitas enak',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Kue',
                'description' => 'Kue berkualitas enak',
                'price' => 2000,
                'stock' => 10,
            ],
            [
                'name' => 'Bakpia',
                'description' => 'Bakpia berkualitas enak',
                'price' => 100,
                'stock' => 10,
            ],
            [
                'name' => 'Roti Bakar',
                'description' => 'Roti Bakar berkualitas enak',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Chitato',
                'description' => 'Chitato keripik kentang gurih dan enak',
                'price' => 6000,
                'stock' => 10,
            ],
            [
                'name' => 'Potabee',
                'description' => 'Potabee keripik kentang gurih dan enak',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Taro',
                'description' => 'Taro keripik gurih dan enak',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Japota',
                'description' => 'Japota keripik gurih dan enak',
                'price' => 5000,
                'stock' => 10,
            ],
            [
                'name' => 'Piattos',
                'description' => 'Piattos keripik gurih dan enak',
                'price' => 5000,
                'stock' => 10,
            ],
        ]);
    }
}
