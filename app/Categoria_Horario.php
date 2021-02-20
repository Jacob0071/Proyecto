<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria_Horario extends Model
{
    protected $table = 'categoria_horarios';

    public function platos()
    {
        return $this->hasMany('App\Plato');
    }
}
