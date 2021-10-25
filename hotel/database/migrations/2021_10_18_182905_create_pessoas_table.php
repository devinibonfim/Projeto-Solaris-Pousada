<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('endereco_id');
            $table->string('nome');
            $table->string('endereco');
            $table->date('data_nascimento');
            $table->string('telefone');
            $table->string('nacionalidade');
            $table->timestamps();

            $table->foreign('endereco_id')
                  ->references('id')
                  ->on('Enderecos')
                  ->onDelete('cascade');

            $table->foreign('user_id')
                  ->references('id')
                  ->on('Users')
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
        Schema::dropIfExists('pessoas');
    }
}
