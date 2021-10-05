<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedagemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedagems', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hospede');
            $table->unsignedBigInteger('id_conta');
            $table->string('dataEntrada');
            $table->string('dataSaida');
            $table->timestamps();
            $table->foreign('id_hospede')->references('id')->on('hospedes');
            $table->foreign('id_conta')->references('id')->on('contas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospedagems');
    }
}
