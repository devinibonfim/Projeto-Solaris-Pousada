<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuncionariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pd_id');
            $table->unsignedBigInteger('cargo_id');
            $table->integer('ra')->autoIncrement();
            $table->string('rg');
            $table->string('pisPasep');
            $table->timestamps();

            $table->foreign('pd_id')
                  ->references('id')
                  ->on('Pds')
                  ->onDelete('cascade');
            
            $table->foreign('cargo_id')
                  ->references('id')
                  ->on('Cargos')
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
        Schema::dropIfExists('funcionarios');
    }
}
