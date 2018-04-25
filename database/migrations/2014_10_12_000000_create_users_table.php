<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->char('name');
            $table->char('email')->unique();
            $table->string('password');
            $table->date('birth');
            $table->string('pic_path')->default('userprofileimg/zmPd6VqI0KiHGp7hZ35pNBJWytLJ5OzyPAJF0Gcl.png');
            $table->rememberToken();
            $table->timestamps();
            $table->index('birth');
        });
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
