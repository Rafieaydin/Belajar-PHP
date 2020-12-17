<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikeJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_jawaban', function (Blueprint $table) {
            $table->id('jawaban_id');
            $table->bigInteger('profile_id')->unsigned()->unique();
            $table->integer('poin');
            $table->timestamps();
        });

        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        Schema::table('like_dislike_jawaban', function (Blueprint $table) {
            $table->foreign('jawaban_id')->references('id')->on('jawaban');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_jawaban');
    }
}
