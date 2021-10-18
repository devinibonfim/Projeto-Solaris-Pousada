<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
<<<<<<< Updated upstream:hotel/database/migrations/2021_10_13_144518_create_fornecedors_table.php
            $table->unsignedBigInteger('id_pessoa');
=======
            $table->unsignedBigInteger('pj_id');
            $table->string('descricaoFornecedor');
>>>>>>> Stashed changes:hotel/database/migrations/2021_10_18_182945_create_fornecedors_table.php
            $table->timestamps();

            $table->foreign('pj_id')
                  ->references('id')
                  ->on('Pjs')
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
        Schema::dropIfExists('fornecedors');
    }
}
