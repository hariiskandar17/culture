<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatCulturesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('cultures', function (Blueprint $table) {
          $table->bigIncrements('id');
          $table->string('name');
          $table->string('alamat');
          $table->string('latitude');
          $table->string('longitude');
          $table->string('deskripsi');
          $table->timestamps();
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cultures');
    }
}
