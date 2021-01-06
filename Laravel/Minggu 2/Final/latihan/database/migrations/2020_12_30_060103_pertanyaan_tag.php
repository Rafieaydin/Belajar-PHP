<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class PertanyaanTag extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pertanyaan_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pertanyaan_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();
        });
        Schema::table('pertanyaan_tag', function (Blueprint $table) {
            $table->foreign('pertanyaan_id')->references('id')->on('pertanyaan')->onDelete('cascade')->onUpdate("cascade");
        });
        // Schema::table('pertanyaan_tag', function (Blueprint $table) {
        //     $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate("cascade");
        // });
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
