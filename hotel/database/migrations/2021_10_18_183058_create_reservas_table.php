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
            $table->unsignedBigInteger('quarto_id');
            $table->unsignedBigInteger('consumo_id');
            $table->string('numeroQuartoReservado');
            $table->string('Valor');
            $table->date('dataEntrada');
            $table->date('dataSaida');
            $table->timestamps();

            $table->foreign('quarto_id')
                  ->references('id')
                  ->on('Quartos')
                  ->onDelete('cascade');

            $table->foreign('consumo_id')
                  ->references('id')
                  ->on('Consumos')
                  ->onDelete('cascade');
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
