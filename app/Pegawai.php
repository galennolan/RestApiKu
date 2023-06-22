<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $table = 'pegawai';

    protected $fillable = [
        'nip',
        'nama',
        'tanggal_lahir',
        'nomor_telepon',
        'email',
    ];
}
