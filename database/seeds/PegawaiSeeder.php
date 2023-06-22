<?php

use Illuminate\Database\Seeder;
use App\Pegawai;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pegawai::create([
            'nip' => '123456789',
            'nama' => 'John Doe',
            'tanggal_lahir' => '1990-01-01',
            'nomor_telepon' => '08123456789',
            'email' => 'johndoe@example.com',
            'created_at' => now(),
                'updated_at' => now(),
        ]);

        Pegawai::create([
            'nip' => '987654321',
            'nama' => 'Jane Smith',
            'tanggal_lahir' => '1995-02-15',
            'nomor_telepon' => '08234567890',
            'email' => 'janesmith@example.com',
            'created_at' => now(),
                'updated_at' => now(),
        ]);
    }
}
