<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documents', function (Blueprint $table) {
            $table->increments('id');
            $table->string('codigo')->nullable();
            $table->string('remitente');
            $table->string('destinatario');
            $table->string('asunto');
            $table->string('dependencia');
            $table->string('tipo');
            $table->string('archivo');
            $table->date('fecha_envio');
            $table->date('fecha_recibido')->nullable();
            $table->date('fecha_revision')->nullable();
            $table->date('fecha_procesado')->nullable();
            $table->boolean('estatus');
            $table->timestamps();

            $table->Integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');

            $table->Integer('document_id')->unsigned()->nullable();
            $table->foreign('document_id')->references('id')->on('documents');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('documents');
    }
}
