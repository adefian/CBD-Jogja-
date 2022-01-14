<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('tanggal')->nullable();
            $table->string('pesan')->nullable();
            $table->string('berkas')->nullable();
            $table->string('pesan_instansi')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();

            $table->foreign('id_users')
                    ->references('id')
                    ->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pengajuan');
    }
}
