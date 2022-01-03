<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('role');
            $table->string('username');
            $table->string('email')->nullable();
            // $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            // $table->rememberToken();
            $table->timestamps();
        });

        DB::table('users')->insert(
            [[
                'role' => 'instansi',
                'username' => 'instansi',
                'email' => 'instansi@gmail.com',
                'password' => bcrypt('1234567'),
            ],[
                'role' => 'admin',
                'username' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('1234567'),
            ],[
                'role' => 'umum',
                'username' => 'umum',
                'email' => 'umum@gmail.com',
                'password' => bcrypt('1234567'),
            ]]
        );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
