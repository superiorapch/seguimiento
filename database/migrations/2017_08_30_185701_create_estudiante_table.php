<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudianteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiante', function (Blueprint $table) {
            $table->increments('id_estudiante');
            $table->string('carnet');
            $table->string('nombre_estudiante');
            $table->string('apellido_estudiante');
            $table->string('cedula_estudiante');
            $table->string('telefono_estudiante');
            $table->string('direccion_estudiante');
            $table->string('email_estudiante');
            $table->integer('edad_estudiante');
            $table->integer('tipo_estudiante_id')->unsigned();
            $table->integer('dato_profecional_id')->unsigned();
            $table->integer('usuario_id')->unsigned();
            $table->timestamps();

            $table->foreign('tipo_estudiante_id')->references('id_tipo_estudiante')->on('tipo_estudiante');
            $table->foreign('dato_profecional_id')->references('id_dato_profecional')->on('dato_profecional');
            $table->foreign('usuario_id')->references('id_usuario')->on('usuario');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('estudiante');
    }
}