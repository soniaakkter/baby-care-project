<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id();
            $table->unsignedBigInteger('recipent')->nullable();
            $table->foreign('recipent')->references('id')->on('users')->onUpdate('No Action')->onDelete('No Action');
            $table->unsignedBigInteger('sender')->nullable();
            $table->foreign('sender')->references('id')->on('users')->onUpdate('No Action')->onDelete('No Action');
            $table->text('message');
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
