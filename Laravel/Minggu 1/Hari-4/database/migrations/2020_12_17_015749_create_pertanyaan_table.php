<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePertanyaanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan', function (Blueprint $table) {
            $table->id();
            $table->string('judul', 45);
            $table->string('isi', 255);
            $table->timestamps();
            $table->bigInteger('jawaban_tepat_id')->unique()->unsigned();
            $table->bigInteger('profile_id')->unique()->unsigned();
        });
        Schema::table('pertanyaan', function (Blueprint $table) {
            $table->foreign('profile_id')->references('id')->on('profile');
        });
        // Schema::table('pertanyaan', function (Blueprint $table) {
        //     $table->foreign('jawaban_tepat_id')->references('id')->on('jawaban');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanyaan');
    }
}
