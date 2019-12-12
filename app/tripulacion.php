<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tripulacion extends Model
{
    public function viaje()
    {
        return $this->hasMany('App\viaje');
    }
}
