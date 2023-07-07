<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->id();
            $table->enum('ativo', array('Sim', 'Não'));
            $table->string('nome');
            $table->bigInteger('celular')->nullable();
            $table->string('data_nascimento');
            $table->enum('sexo', array('M', 'F'));
            $table->bigInteger('cpf')->unsigned()->nullable();
            $table->string('endereco')->nullable();
            $table->integer('cep')->nullable();
            $table->string('bairro')->nullable();
            $table->string('complemento')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
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
        Schema::dropIfExists('pacientes');
    }
};
