<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Venta extends Model
{
    protected $fillable=["id","fecha"];
    protected $table = 'ventas';
    public $timestamps = false;

    public function platos()
    {
        return $this->belongsToMany('App\Plato');
    }
}
