<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKoemtarPertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('komentar_pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('isi', 255);
            $table->timestamps();
            $table->bigInteger('profile_id')->unsigned()->unique();
            $table->bigInteger('pertanyaan_id')->unsigned()->unique();
        });
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        Schema::table('komentar_pertanyaan', function (Blueprint $table) {
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
        Schema::dropIfExists('koemtar_pertanyaan');
    }
}
