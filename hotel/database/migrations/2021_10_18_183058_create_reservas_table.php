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
            $table->string('numero_quarto_reservado');
            $table->string('valor');
            $table->date('data_entrada');
            $table->date('data_saida');
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
