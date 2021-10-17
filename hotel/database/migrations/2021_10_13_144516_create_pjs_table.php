<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePjsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pjs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_hospede');
            $table->string('cnpj');//cnpj
            $table->timestamps();
            $table->foreign('id_hospede')->references('id')->on('hospedes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pjs');
    }
}
