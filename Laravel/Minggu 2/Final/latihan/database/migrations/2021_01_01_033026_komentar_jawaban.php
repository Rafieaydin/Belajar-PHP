<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class KomentarJawaban extends Migration
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
            $table->string('isi');
            $table->timestamps();
            $table->unsignedBigInteger('jawaban_id');
            $table->unsignedBigInteger('user_id');
        });
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->foreign('jawaban_id')->references('id')->on('jawaban')->onDelete('cascade')->onUpdate("cascade");
        });
        Schema::table('komentar_jawaban', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
