<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DataServiceSeeder extends Seeder
{
    public function run()
    {
        DB::table('service')->insert([
            [
                'nama' => 'Ganti Oli Mesin Mobil',
                'biaya' => '450000'
            ],
            [
                'nama' => 'Ganti Filter Oli',
                'biaya' => '300000'
            ],
            [
                'nama' => 'Ganti Busi Mobil',
                'biaya' => '50000'
            ],
            [
                'nama' => 'Ganti Filter Air Conditioner Mobil',
                'biaya' => '85000'
            ],
            [
                'nama' => 'Ganti Kanvas Kopling',
                'biaya' => '7500000'
            ],
            [
                'nama' => 'Ganti Kanvas Rem',
                'biaya' => '225000'
            ],
            [
                'nama' => 'Ganti Filter Udara',
                'biaya' => '235000'
            ]
            ]);
    }
}