<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTimKegiatansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tim_kegiatan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_timpelaksana');
            $table->unsignedBigInteger('id_kegiatan');
            $table->timestamps();

            $table->foreign('id_timpelaksana')
                    ->references('id')
                    ->on('tim_pelaksana');

            $table->foreign('id_kegiatan')
                    ->references('id')
                    ->on('kegiatan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tim_kegiatan');
    }
}
