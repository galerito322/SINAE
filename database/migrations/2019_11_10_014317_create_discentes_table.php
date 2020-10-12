<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiscentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('discentes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('sexo');
            $table->string('matricula')->unique();
            $table->unsignedBigInteger('curso_id');
            $table->string('turma'); 
            $table->string('foto');  //foto do discente
            $table->string('estado'); //status (ativo, encaminhado...) 
            $table->date('dataNasc');
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
        Schema::dropIfExists('discentes');
    }
}
