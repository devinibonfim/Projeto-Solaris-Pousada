<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHospedesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hospedes', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream:hotel/database/migrations/2021_10_13_144515_create_hospedes_table.php
            $table->unsignedBigInteger('id_pessoa');
            $table->string('birthDateGuest');//Data de nascimento
            $table->timestamps();
            $table->foreign('id_pessoa')->references('id')->on('pessoas')->onDelete('cascade');
=======
            $table->unsignedBigInteger('pf_id');
            $table->unsignedBigInteger('reserva_id');
            $table->timestamps();

            $table->foreign('pf_id')
                  ->references('id')
                  ->on('Pfs')
                  ->onDelete('cascade');

            $table->foreign('reserva_id')
                  ->references('id')
                  ->on('Reservas')
                  ->onDelete('cascade');
>>>>>>> Stashed changes:hotel/database/migrations/2021_10_18_183059_create_hospedes_table.php
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hospedes');
    }
}
