<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_Comida extends Model
{
    protected $table = 'categoria_comidas'; 
    public $timestamps = false;

    public function platos()
    {
        return $this->hasMany('App\Plato');
    }
}
