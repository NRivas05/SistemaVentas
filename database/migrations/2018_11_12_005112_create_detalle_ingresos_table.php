<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDetalleIngresosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_ingresos', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cantidad');
            $table->decimal('precio_compra', 11,2);
            $table->decimal('precio_venta', 11,2);
            $table->integer('idingresos')->unsigned();
            $table->integer('idarticulos')->unsigned();

            $table->foreign('idarticulos')->references('id')->on('articulos')->onDelete('cascade');
            $table->foreign('idingresos')->references('id')->on('ingresos')->onDelete('cascade');
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
        Schema::dropIfExists('detalle_ingresos');
    }
}
