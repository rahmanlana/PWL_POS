<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['kategori_id' => 1, 'kategori_kode' => 'FNB', 'kategori_nama' => 'Food and Beverage'],
        ['kategori_id' => 2, 'kategori_kode' => 'MCH', 'kategori_nama' => 'Merchandise'],
        ['kategori_id' => 3, 'kategori_kode' => 'HBT', 'kategori_nama' => 'Health & Beauty'],
        ['kategori_id' => 4, 'kategori_kode' => 'HMG', 'kategori_nama' => 'Home & Garden'],
        ['kategori_id' => 5, 'kategori_kode' => 'KID', 'kategori_nama' => 'Baby & Kid'],
    ];
    DB::table('m_kategori')->insert($data);
    }
}
