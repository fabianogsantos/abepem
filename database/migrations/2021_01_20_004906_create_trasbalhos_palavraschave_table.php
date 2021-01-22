<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrasbalhosPalavraschaveTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trasbalhos_palavraschave', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('trabalhocientifico_id')->unsigned();
            $table->integer('palavrachave_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trasbalhos_palavraschave');
    }
}
