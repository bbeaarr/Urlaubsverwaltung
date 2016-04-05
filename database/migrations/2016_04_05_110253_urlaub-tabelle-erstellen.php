<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UrlaubTabelleErstellen extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('urlaub', function (Blueprint $table) {
            $table->increments('id');
            $table->date('von');
            $table->date('bis');
            $table->tinyint('anzahlTage');
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
        Schema::drop('urlaub');
    }
}
