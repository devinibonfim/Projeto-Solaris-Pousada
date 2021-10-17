<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hospede');
            $table->string('entryDateReserve');//Data de entrada
            $table->string('departureDateReserve');//Data de saida
            $table->string('numberReserve');//Numero do quarto
            $table->string('valueReserve');//Valor
            $table->timestamps();
            $table->foreign('id_hospede')->references('id')->on('hospedes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservas');
    }
}
