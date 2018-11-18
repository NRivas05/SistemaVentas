<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_comprobante', 20);
            $table->string('serie_comprobante', 7);
            $table->string('num_comprobante', 10);
            $table->datetime('fecha_hora');
            $table->decimal('impuesto', 4,2);
            $table->decimal('total_venta', 11,2);
            $table->string('estado', 20);
            $table->integer('idpersonas')->unsigned();
            $table->integer('idusers')->unsigned();

            $table->foreign('idpersonas')->references('id')->on('personas')->onDelete('cascade');
            $table->foreign('idusers')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('ventas');
    }
}
