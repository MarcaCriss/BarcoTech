<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class viaje extends Model
{
    public function cliente()
    {
        return $this->belongsTo('App\cliente', 'id_cliente');
    }
    
    public function tripulante()
    {
        return $this->belongsTo('App\tripulacion', 'id_tripulante');
    }
}
