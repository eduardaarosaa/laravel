<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CadastroSocio extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nomesocio');
            $table->integer('cpfsocio');
            $table->string('pep');
            $table->string('partido');
            $table->string('documento');
            $table->string('selfie');
            $table->string('comprovante');
            $table->string('procuracao');
            $table->string('nomesocio1');
            $table->integer('cpfsocio1');
            $table->string('pep1');
            $table->string('partido1');
            $table->string('documento1');
            $table->string('selfie1');
            $table->string('comprovante1');
            $table->string('nomesocio2');
            $table->integer('cpfsocio2');
            $table->string('pep2');
            $table->string('partido2');
            $table->string('documento2');
            $table->string('selfie2');
            $table->string('comprovante2');
            $table->string('nomesocio3');
            $table->integer('cpfsocio3');
            $table->string('pep3');
            $table->string('partido3');
            $table->string('documento3');
            $table->string('selfie3');
            $table->string('comprovante3');
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
        //
    }
}
