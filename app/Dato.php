<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato extends Model
{
    protected $table = 'datos';

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }
}
