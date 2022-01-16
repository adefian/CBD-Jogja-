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

    public function Berkas()
    {
        if(!$this->berkas){
            return asset('public/assets/user/berkas/default.png');
        }else{
            return asset('public/assets/user/berkas/'.$this->berkas);
        }
    }
    public function Pesan_instansi()
    {
        if(!$this->berkas){
            return asset('public/assets/user/pesan_instansi/default.png');
        }else{
            return asset('public/assets/user/pesan_instansi/'.$this->pesan_instansi);
        }
    }
}