<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TimKegiatan extends Model
{
    protected $table = "tim_kegiatan";

    protected $fillable = [
        'id_timpelaksana',
        'id_kegiatan'
    ];

    
    public function tim_pelaksana()
    {
        return $this->belongsTo('App\TimPelaksana', 'id_timpelaksana');
    }

    public function kegiatan()
    {
        return $this->belongsTo('App\Kegiatan', 'id_kegiatan');
    }
}
