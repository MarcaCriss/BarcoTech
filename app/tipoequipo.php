<?php

namespace App;

use App\equipo;
use Illuminate\Database\Eloquent\Model;

class tipoequipo extends Model
{
    public function equipos()
    {
        return $this->hasMany('App\equipo');
    }
}
