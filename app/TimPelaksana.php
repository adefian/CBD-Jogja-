<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimPelaksana extends Model
{
    protected $table = "tim_pelaksana";

    protected $fillable = [
        'nama',
        'jabatan',
        'alamat',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon',
        'keterangan'
    ];
}
