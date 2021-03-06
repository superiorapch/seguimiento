<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleOfertaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_oferta', function (Blueprint $table) {
            $table->increments('id_detalle_oferta');
            $table->string('orientacion');
            $table->string('oferta_salarial');
            $table->string('area');
            $table->string('cargo_oferta');
            $table->integer('oferta_id')->unsigned();
            $table->timestamps();

            $table->foreign('oferta_id')->references('id_oferta')->on('oferta')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('detalle_oferta');
    }
}
