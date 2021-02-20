<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $table = 'ventas';

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }
}
