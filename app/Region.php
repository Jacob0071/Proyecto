<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    protected $table = 'regiones';

    public function platos()
    {
        return $this->hasMany('App\Plato');
    }
}
