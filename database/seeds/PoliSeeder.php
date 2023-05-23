<?php

use Illuminate\Database\Seeder;

class PoliSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 15; $i <= 50; $i++) {
            DB::table('poli')->insert([
                'nama_poli' => 'poli '.$i,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }}
}
