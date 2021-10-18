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
