<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bote extends Model
{
    public function propietario()
    {
        return $this->belongsTo('App\propietario','id_propietario');
    }

    public function equipo()
    {
        return $this->belongsTo('App\equipo','id_equipo');
    }
}
