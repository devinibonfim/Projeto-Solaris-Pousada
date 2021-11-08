<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateListaConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lista_consumos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id');
            $table->unsignedBigInteger('consumo_id');
            $table->timestamps();

            $table->foreign('consumo_id')
                    ->references('id')
                    ->on('Consumos')
                    ->onDelete('cascade');
            
            $table->foreign('produto_id')
                  ->references('id')
                  ->on('Produtos')
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
        Schema::dropIfExists('lista_consumos');
    }
}
