<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CagarBudaya extends Model
{
    protected $table = 'cagar_budaya';

    protected $fillable = [
            'pendaftar',
            'kategori',
            'periodesasi_id',
            'peringkat_id',
            'manfaat_id',
            'jenis_id',
            'keterawatan_id',
            'registrasi_id',
            'kepemilikan_id',
            'kabupaten_id',
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

    public function Foto_CBBenda()
    {
        if(!$this->foto){
            return asset('public/Images/cagar_budaya/benda/default.png');
        }else{
            return asset('public/Images/cagar_budaya/benda/'.$this->foto);
        }
    }
}