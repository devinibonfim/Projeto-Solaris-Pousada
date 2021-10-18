<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBairrosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bairros', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cidade_id');
            $table->string('nomeBairro');
            $table->timestamps();

            $table->foreign('cidade_id')
                  ->references('id')
                  ->on('Cidades')
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
        Schema::dropIfExists('bairros');
    }
}
