<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class propietario extends Model
{
    public function bote()
    {
        return $this->belongsTo('App\bote');
    }
}
