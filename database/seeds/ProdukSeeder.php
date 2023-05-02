<?php
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdukSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('produk')->insert([
                'nama_produk' => 'Produk '.$i,
                'stok' => rand(10, 100),
                'harga' => rand(1000, 10000),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
