<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrabalhoscientificosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trabalhoscientificos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('titulo');
            $table->string('arquivo');
            $table->integer('autor_id')->unsigned()->nullable();
            $table->integer('categoria_id')->unsigned()->nullable();
            $table->integer('eixo_id')->unsigned()->nullable();
            $table->integer('palavrachave_id')->unsigned()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trabalhoscientificos');
    }
}
