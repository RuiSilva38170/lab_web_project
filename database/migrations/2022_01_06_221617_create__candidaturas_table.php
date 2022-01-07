<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCandidaturasTable extends Migration
{
    /**
     * Run the migrations.s
     *
     * @return void
     */
    public function up()
    {
        Schema::create('candidaturas', function (Blueprint $table) {
            $table->id();
            $table->string('nomeCandidato');
            $table->unsignedBigInteger('idCandidato');
            $table->string('emailCandidato');
            $table->timestamp('dataCandidatura');
            $table->unsignedBigInteger('idAnuncio');
            $table->string('mensagem')->nullable();
            $table->timestamps();

            $table->foreign('idCandidato')
            ->references('id')
            ->on('users')
            ->onUpdate('CASCADE')
            ->onDelete('RESTRICT');
          
            $table->foreign('idAnuncio'                                                                                                                                                                                                                                                                                                                                 )
            ->references('id')
            ->on('anuncios')
            ->onUpdate('CASCADE')
            ->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('candidaturas');
    }
}