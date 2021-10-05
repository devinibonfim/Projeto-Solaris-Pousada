<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoaJuridicasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoa_juridicas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hospede');
            $table->string('cnpj');
            $table->timestamps();
            $table->foreign('id_hospede')->references('id')->on('hospedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoa_juridicas');
    }
}
