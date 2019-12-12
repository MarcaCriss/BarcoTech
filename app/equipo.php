<?php

namespace App;

use App\tipoequipo;
use Illuminate\Database\Eloquent\Model;

class equipo extends Model
{
    public function tipoequipo()
    {
        return $this->belongsTo('App\tipoequipo', 'id_tipo_equipo');
    }

    public function bote()
    {
        return $this->belongsTo('App\bote');
    }
    
}
