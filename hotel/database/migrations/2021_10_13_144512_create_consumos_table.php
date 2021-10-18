<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateConsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('consumos', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream:hotel/database/migrations/2021_10_13_144512_create_consumos_table.php
            $table->string('descriptionConsumption');//descrição
            $table->string('quantityConsumption');//quantidade
            $table->integer('total');
=======
            $table->string('nomeConsumo');
            $table->string('quantidadeConsumo');
            $table->string('valorConsumo');
>>>>>>> Stashed changes:hotel/database/migrations/2021_10_18_183136_create_consumos_table.php
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
        Schema::dropIfExists('consumos');
    }
}
