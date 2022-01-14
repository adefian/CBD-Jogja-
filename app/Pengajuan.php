<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = "pengajuan";

    protected $fillable = [
        'id_users',
        'nama',
        'email',
        'tanggal',
        'pesan',
        'berkas',
        'pesan_instansi',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo('App\User', 'id_users');
    }
}
