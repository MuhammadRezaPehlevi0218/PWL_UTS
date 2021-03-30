<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'Id_Barang' => '1',
                'kode_barang'=>'PRD001',
        	    'nama_barang' => 'Indomie',
        	    'kategori_barang' => 'Makanan',
                'harga' => '3000',
                'qty' => '100',
            ],
            [
                'Id_Barang' => '2',
                'kode_barang'=>'PRD002',
        	    'nama_barang' => 'Pocari Sweat',
        	    'kategori_barang' => 'Minuman',
                'harga' => '6000',
                'qty' => '50',
            ],
            [
                'Id_Barang' => '3',
                'kode_barang'=>'PRD003',
        	    'nama_barang' => 'Silverqueen',
        	    'kategori_barang' => 'Snack',
                'harga' => '12500',
                'qty' => '45',
            ],
            [
                'Id_Barang' => '4',
                'kode_barang'=>'PRD004',
        	    'nama_barang' => 'Doritos',
        	    'kategori_barang' => 'Snack',
                'harga' => '10500',
                'qty' => '50',
            ],
            [
                'Id_Barang' => '5',
                'kode_barang'=>'PRD005',
        	    'nama_barang' => 'Pocky',
        	    'kategori_barang' => 'Snack',
                'harga' => '11500',
                'qty' => '30',
            ],
        ];
        DB::table('barangs')->insert($data);
    }
}
