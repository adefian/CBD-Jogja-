<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Masyarakat extends Model
{
    protected $table = 'masyarakat';

    protected $fillable = [
        'id_users',
        'nama_user',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'telepon',
        'pekerjaan',
        'alamat',
        'kode_pos',
        'kategori_pendaftar',
        'foto',
    ];

    public function Foto()
    {
        if(!$this->foto){
            return asset('public/assets/user/img/foto/default.png');
        }else{
            return asset('public/assets/user/img/foto/'.$this->foto);
        }
    }
}