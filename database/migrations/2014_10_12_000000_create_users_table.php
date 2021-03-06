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
            $table->char('pseudo')->unique();
            $table->char('email')->unique();
            $table->string('password');
            $table->date('birth');
            $table->string('pic_path')->default('');
            $table->rememberToken();
            $table->softDeletes();
            $table->smallInteger('grouptype')->default(0);;
            $table->timestamps();
            $table->index(['birth','pseudo']);
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
