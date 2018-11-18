<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Detalle_venta extends Model
{
    protected $table = ('detalle_ventas');
    protected $filleable = [
        'cantidad',
        'precio_venta',
        'descuento',
        'idventas',
        'idarticulos'];

        public function ventas()
        {
            return $this->belongsTo('App\venta');
        }

        public function articulos()
        {
            return $this->belongsTo('App\Articulo');
        }
}
