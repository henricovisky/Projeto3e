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
        Schema::create('ativos', function (Blueprint $table) { // Criando tabela de ativos da 3e no banco ativos_3e
          $table->id();
          $table->string('nome');
          $table->longText('descricao');
          $table->string('categoria');
          $table->date('data_aquisicao');
          $table->decimal('valor', 10, 2);
          $table->string('localizacao');
          $table->timestamps(); // cria coluna com data de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ativos_3e');
    }
};
