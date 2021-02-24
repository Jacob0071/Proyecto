<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

use App\Plato;
use App\Categoria_Comida;
use App\Categoria_Horario;
use App\Region;

class PlatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $platos = Plato::all();
        return view ("platos.index",compact("platos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoria_horaria = Categoria_Horario::all();
        $categoria_comida = Categoria_Comida::all();
        $regiones = Region::all();
        return view("platos.create", compact("categoria_comida","categoria_horaria","regiones"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validate($request,['id'=>'required',
        'nombre'=>'required',
        'precio'=>'required',
        'categoria_comida_id'=>'required',
        'categoria_horaria_id'=>'required',
        'region_id'=>'required']);
        $entrada=$request->all();
        if($archivo=$request->file('file')){
            $nombre=$archivo->getClientOriginalName();

            $archivo->move('images',$nombre);
            $entrada['foto']=$nombre;
        }
        Plato::create($entrada);
        return redirect("/platos");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $plato=Plato::findOrFail($id);
        return view ("platos.show",compact("plato"));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $plato=Plato::findOrFail($id);
        return view ("platos.edit",compact("plato"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $plato=Plato::findOrFail($id);
        $plato->update($request->all());

        return redirect("/platos");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $plato=Plato::findOrFail($id);
        $plato->delete();
        return redirect("/platos");
    }
}
