<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKomentarJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->timestamps();
            $table->bigInteger('profile_id')->unsigned()->unique();
            $table->bigInteger('jawaban_id')->unsigned()->unique();
        });
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        Schema::table('komentar_jawaban', function (Blueprint $table) {
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
        Schema::dropIfExists('komentar_jawaban');
    }
}
