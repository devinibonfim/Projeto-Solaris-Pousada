<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTipoQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipo_quartos', function (Blueprint $table) {
            $table->id();
            $table->string('nome');
            $table->float('valor');
            $table->string('tamanho');
            $table->integer('limite_pessoa');
            $table->string('descricao', 6000);
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
        Schema::dropIfExists('tipo_quartos');
    }
}