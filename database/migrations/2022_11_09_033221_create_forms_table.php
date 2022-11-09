<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFormsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('nome_artistico');
            $table->string('cpf');
            $table->string('data_nascimento');
            $table->string('nacionalidade');
            $table->string('naturalidade');
            $table->string('email');
            $table->string('endereco');
            $table->string('complemento');
            $table->string('estado');
            $table->string('bairro');
            $table->string('cep');
            $table->string('cidade');
            $table->string('telefone');
            $table->string('vinculo_institucional');
            $table->string('descricao_vinculo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('forms');
    }
}
