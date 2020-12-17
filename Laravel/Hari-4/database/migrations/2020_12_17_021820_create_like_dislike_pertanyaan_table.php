<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLikeDislikePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->id('pertanyaan_id');
            $table->bigInteger('profile_id')->unsigned()->unique();
            $table->integer('poin');
            $table->timestamps();
        });

        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        Schema::table('like_dislike_pertanyaan', function (Blueprint $table) {
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('like_dislike_pertanyaan');
    }
}
