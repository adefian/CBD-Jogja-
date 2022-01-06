<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMasyarakatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('masyarakat', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('nama_user')->nullable();
            $table->string('tempat_lahir')->nullable();
            $table->string('tanggal_lahir')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('telepon')->nullable();
            $table->string('pekerjaan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('kode_pos')->nullable();
            $table->string('kategori_pendaftar')->nullable();
            $table->string('foto')->nullable();
            $table->timestamps();

            $table->foreign('id_users')
                    ->references('id')
                    ->on('users');
        });

        DB::table('masyarakat')->insert(
            [
                'id_users' => 3,
                'nama_user' => 'Arum',
                'jenis_kelamin' => 'Perempuan',
                'alamat' => 'Banyuwangi',
                'telepon' => '08123456789',
            ]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('masyarakat');
    }
}
