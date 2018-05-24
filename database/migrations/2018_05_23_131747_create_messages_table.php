<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('message_from_id');
            $table->unsignedInteger('message_to_id');
            $table->foreign('message_from_id', 'message_from')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('message_to_id', 'message_to')->references('id')->on('users')->onDelete('cascade');
            $table->text('message_content');
            $table->dateTime('read_at')->nullable();
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
        Schema::dropIfExists('messages');
    }
}
