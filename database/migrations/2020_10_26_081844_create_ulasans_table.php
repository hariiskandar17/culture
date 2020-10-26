<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUlasansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('ulasans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_lokasi')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->mediumText('ulasan');
            $table->timestamps();

            $table->foreign('id_lokasi')->references('id_lokasi')->on('deskripsis')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ulasans');
    }
}
