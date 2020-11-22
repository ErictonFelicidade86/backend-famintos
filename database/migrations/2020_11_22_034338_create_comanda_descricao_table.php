<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComandaDescricaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comanda_descricao', function (Blueprint $table) {
            $table->id();
            $table->foreignId('comanda');
            $table->foreignId('produtos');
            $table->integer('quantidade');
            $table->timestamps();

            $table->foreign('comanda')->references('id')->on('comandas');
            $table->foreign('produtos')->references('id')->on('produtos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comanda_descricaos');
    }
}
