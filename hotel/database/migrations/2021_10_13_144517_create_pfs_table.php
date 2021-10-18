<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pfs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pessoa_id');
            $table->string('cpf')->unique();
            $table->timestamps();
<<<<<<< Updated upstream:hotel/database/migrations/2021_10_13_144517_create_pfs_table.php
            $table->foreign('id_hospede')->references('id')->on('hospedes')->onDelete('cascade');
=======

            $table->foreign('pessoa_id')
                  ->references('id')
                  ->on('Pessoas')
                  ->onDelete('cascade');
>>>>>>> Stashed changes:hotel/database/migrations/2021_10_18_182933_create_pfs_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pfs');
    }
}
