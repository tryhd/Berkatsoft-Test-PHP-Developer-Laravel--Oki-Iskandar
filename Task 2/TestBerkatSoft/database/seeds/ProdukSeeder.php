<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $now = date('Y-m-d H:i:s');

        DB::table('produk')->insert(
            array(
                'nama_produk' => 'Tv Sharp 21 inci',
                'stok'=>'50',
                'harga'=>'1250000',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('produk')->insert(
            array(
                'nama_produk' => 'monitor LG 24 inci',
                'stok'=>'25',
                'harga'=>'1400000',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('produk')->insert(
            array(
                'nama_produk' => 'Printer Epson L12',
                'stok'=>'20',
                'harga'=>'1200000',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('produk')->insert(
            array(
                'nama_produk' => 'Tv Polytron 40 inci',
                'stok'=>'30',
                'harga'=>'3200000',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );

        DB::table('produk')->insert(
            array(
                'nama_produk' => 'Asus A45v',
                'stok'=>'32',
                'harga'=>'5200000',
                'created_at' => $now,
                'updated_at' => $now,
            )
        );
    }
}
