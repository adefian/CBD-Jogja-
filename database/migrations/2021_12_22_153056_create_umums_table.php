<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUmumsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('umum', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('nama_user')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('alamat')->nullable();
            $table->string('telepon')->nullable();
            $table->timestamps();

            $table->foreign('id_users')
                    ->references('id')
                    ->on('users');
        });

        DB::table('umum')->insert(
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
        Schema::dropIfExists('umum');
    }
}
