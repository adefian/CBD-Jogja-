<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCagarBudayasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cagar_budaya', function (Blueprint $table) {
            $table->id();
            $table->string('pendaftar')->nullable();
            $table->string('nama_kegiatan')->nullable();
            $table->string('kategori')->nullable();
            $table->string('periodesasi')->nullable();
            $table->integer('peringkat_id')->nullable();
            $table->integer('manfaat_id')->nullable();
            $table->integer('jenis_id')->nullable();
            $table->string('kondisi')->nullable();
            $table->integer('registrasi_id')->nullable();
            $table->integer('kepemilikan_id')->nullable();
            $table->string('kabupaten')->nullable();
            $table->string('nama')->nullable();
            $table->string('hindu')->nullable();
            $table->string('budha')->nullable();
            $table->string('jenis')->nullable();
            $table->string('x')->nullable();
            $table->string('y')->nullable();
            $table->string('tempat_penyimpanan')->nullable();
            $table->double('latitude')->nullable();
            $table->double('longitude')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('luas_lahan')->nullable();
            $table->string('luas_bangunan')->nullable();
            $table->string('utara')->nullable();
            $table->string('selatan')->nullable();
            $table->string('timur')->nullable();
            $table->string('barat')->nullable();
            $table->string('dipugar_tahun')->nullable();
            $table->string('jupel_pns')->nullable();
            $table->string('jupel_non_pns')->nullable();
            $table->string('tahun_pembuatan')->nullable();
            $table->string('nama_jalan')->nullable();
            $table->string('tempat')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('kelurahan')->nullable();
            $table->string('kodepos')->nullable();
            $table->string('pemilik')->nullable();
            $table->string('riwayat')->nullable();
            $table->string('pengelola')->nullable();
            $table->string('panjang')->nullable();
            $table->string('lebar')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('tebal')->nullable();
            $table->string('diameter')->nullable();
            $table->string('berat')->nullable();
            $table->string('bahan')->nullable();
            $table->string('warna')->nullable();
            $table->string('ketinggian')->nullable();
            $table->mediumText('sejarah')->nullable();
            $table->mediumText('deskripsi')->nullable();
            $table->mediumText('keterangan')->nullable();
            $table->string('foto')->nullable();
            $table->string('no_sk')->nullable();
            $table->string('no_registrasi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cagar_budaya');
    }
}
