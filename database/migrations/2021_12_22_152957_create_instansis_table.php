<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInstansisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instansi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->string('nama_instansi')->nullable();
            $table->timestamps();

            $table->foreign('id_users')
                    ->references('id')
                    ->on('users');
        });

        DB::table('instansi')->insert(
            [
                'id_users' => 1,
                'nama_instansi' => 'Balai Pelestarian Cagar Budaya D.I. Yogyakarta',
                
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
        Schema::dropIfExists('instansi');
    }
}
