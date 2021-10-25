<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hospede_associado');
            $table->string('name'); //nome
            $table->string('age');//idade
            $table->timestamps();
            $table->foreign('id_hospede_associado')->references('id')->on('hospedes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('associados');
    }
}
