<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_fornecedor');
            $table->unsignedBigInteger('id_validade');
            $table->string('descriptionProduct');//Descrição
            $table->integer('quantityProduct');//Quantidade
            $table->timestamps();
            $table->foreign('id_fornecedor')->references('id')->on('fornecedors')->onDelete('cascade');
            $table->foreign('id_validade')->references('id')->on('validades')->onDelete('cascade');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
