<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJawabanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->timestamps();
            $table->bigInteger('pertanyaan_id')->unique()->unsigned();
            $table->bigInteger('profile_id')->unique()->unsigned();
        });
        Schema::table('jawaban', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        Schema::table('jawaban', function (Blueprint $table) {
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
        Schema::dropIfExists('jawaban');
    }
}
