<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CagarBudaya extends Model
{
    protected $table = 'cagar_budaya';

    protected $fillable = [
            'pendaftar',
            'kategori',
            'periodesasi',
            'peringkat_id',
            'manfaat_id',
            'jenis_id',
            'kondisi',
            'registrasi_id',
            'kepemilikan_id',
            'kabupaten',
            'nama',
            'hindu',
            'budha',
            'jenis',
            'x',
            'y',
            'tempat_penyimpanan',
            'latitude',
            'longitude',
            'ukuran',
            'luas_lahan',
            'luas_bangunan',
            'utara',
            'selatan',
            'timur',
            'barat',
            'dipugar_tahun',
            'jupel_pns',
            'jupel_non_pns',
            'tahun_pembuatan',
            'nama_jalan',
            'tempat',
            'alamat',
            'kecamatan',
            'kelurahan',
            'kodepos',
            'pemilik',
            'riwayat',
            'pengelola',
            'panjang',
            'lebar',
            'tinggi',
            'tebal',
            'diameter',
            'berat',
            'bahan',
            'warna',
            'ketinggian',
            'sejarah',
            'deskripsi',
            'keterangan',
            'foto',
            'no_sk',
            'no_registrasi',
    ];

    
    public function kabupaten()
    {
        return $this->belongsTo('App\Regency', 'kabupaten_id');
    }

    public function kecamatan()
    {
        return $this->belongsTo('App\District', 'kecamatan_id');
    }

    public function kelurahan()
    {
        return $this->belongsTo('App\Village', 'kelurahan_id');
    }

    public function Foto_CB()
    {
        if(!$this->foto){
            return asset('public/Images/cagar_budaya/default.png');
        }else{
            return asset('public/Images/cagar_budaya/'.$this->foto);
        }
    }

}