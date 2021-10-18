<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCargosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cargos', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream:hotel/database/migrations/2021_10_13_144514_create_validades_table.php
            $table->string('dateValidity');//date
            $table->string('batchValidity');//lote
=======
            $table->string('nomeCargo');
            $table->string('salario');
>>>>>>> Stashed changes:hotel/database/migrations/2021_10_18_183033_create_cargos_table.php
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
        Schema::dropIfExists('cargos');
    }
}
