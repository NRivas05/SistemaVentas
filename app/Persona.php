<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    protected $table = ('personas');
    protected $filleable = [
        'tipo_persona',
        'nombre',
        'tipo_documento',
        'num_documento',
        'direccion',
        'telefono',
        'email'];

        public function ingresos()
        {
            return $this->hasmany('App\Ingreso');
        }

        public function ventas()
        {
            return $this->hasmany('App\Venta');
        }
}
