<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
        ['supplier_id' => 1, 'supplier_kode' => 'IDN', 'supplier_nama' => 'Indofood', 'supplier_alamat' => 'Jakarta'],
        ['supplier_id' => 2, 'supplier_kode' => 'UNV', 'supplier_nama' => 'Unilever', 'supplier_alamat' => 'Surabaya'],
        ['supplier_id' => 3, 'supplier_kode' => 'WNG', 'supplier_nama' => 'Wings Group', 'supplier_alamat' => 'Sidoarjo'],
    ];
    DB::table('m_supplier')->insert($data);
    }
}
