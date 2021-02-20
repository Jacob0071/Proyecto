<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $table = 'cartas';

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }
}