<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carta extends Model
{
    protected $fillable=["id","fecha_inicio","fecha_final","vigencia"];
    protected $table = 'cartas';
    public $timestamps = false;

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }
}
