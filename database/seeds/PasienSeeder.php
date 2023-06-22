<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class PasienSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Generate 3 random data entries for Pegawai table
        $data = [];
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 3; $i++) {
            $data[] = [
                'nomor_rm' => $faker->randomNumber(5),
                'nama' => $faker->name,
                'tanggal_lahir' => $faker->date,
                'nomor_telepon' => $faker->phoneNumber,
                'alamat' => $faker->address,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        // Insert the generated data into the pasien table
        DB::table('pasien')->insert($data);
}
}