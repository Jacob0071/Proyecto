<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plato extends Model
{

    protected $fillable=["id","nombre","descripcion","nivel","precio","foto","categoria_comida_id","categoria_horaria_id","region_id"];

    protected $table = 'platos';
    public $timestamps = false;

    public function region()
    {
        return $this->belongsTo('App\Region');
    }
    public function categoria_comida()
    {
        return $this->belongsTo('App\Categoria_Comida');
    }
    public function categoria_horario()
    {
        return $this->belongsTo('App\Categoria_Horario');
    }
    public function datos()
    {
        return $this->belongsToMany('App\Dato');
    }
    public function cartas()
    {
        return $this->belongsToMany('App\Carta');
    }
    public function ventas()
    {
        return $this->belongsToMany('App\Venta');
    }
}
