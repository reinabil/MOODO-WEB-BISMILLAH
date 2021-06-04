<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotesTable extends Migration
{
    public function up()
    {
        Schema::create('notes', function (Blueprint $table) {
            $table->id('note_id');
            $table->string('title');
            $table->date('created_at');
            $table->date('updated_at');
            $table->text('detail');
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            //mood FK
            $table->unsignedBigInteger('mood_id');
            $table->foreign('mood_id')->references('mood_id')->on('moods');
            //doa FK
            $table->unsignedBigInteger('doa_id');
            $table->foreign('doa_id')->references('doa_id')->on('doas');
        });
    }

    public function down()
    {
        Schema::dropIfExists('notes');
    }
}
