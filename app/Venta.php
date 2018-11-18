<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = ('ventas');
    protected $filleable = [
        'tipo_comprobante',
        'serie_comprobante',
        'num_comprobante',
        'fecha_hora',
        'impuesto',
        'total_venta',
        'estado',
        'idpersonas',
        'idusers'];

        public function personas()
        {
            return $this->belongsTo('App\Persona');
        }

        public function detalle_ventas()
        {
            return $this->hasmany('App\Detalle_venta');
        }

        public function users()
        {
            return $this->belongsTo('App\User');
        }
}
