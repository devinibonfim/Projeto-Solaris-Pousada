<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_reserva');
            $table->unsignedBigInteger('id_hospedagem');
            $table->unsignedBigInteger('id_tipoQuarto');
            $table->string('descriptionRoom');//descrição
            $table->string('numberRoom');//numero do quarto
            $table->timestamps();
            $table->foreign('id_reserva')->references('id')->on('reservas')->onDelete('cascade');
            $table->foreign('id_hospedagem')->references('id')->on('hospedagems')->onDelete('cascade');
            $table->foreign('id_tipoQuarto')->references('id')->on('tipo_quartos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('quartos');
    }
}
