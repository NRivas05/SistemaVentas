<?php

namespace sisVentas;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = ('categoria');
    protected $filleable = [
        'nombre',
        'descripcion',
        'condicion'];

        public function articulos()
        {
            return $this->hasmany('App\Articulo');
        }
}
