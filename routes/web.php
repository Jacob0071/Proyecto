
<?php

use App\Region;
use App\Categoria_Horario;
use App\Categoria_Comida;
use App\Plato;
use App\Dato;
use App\Carta;
use App\Venta;
use App\Plato_Venta;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('main');
});

Route::get('/consultas', function(){
    return view("platos.consultas");
});

Route::get('/consulta_regiones', function(){
    return view("platos.consulta_regiones");
});

Route::get('/consulta_categorias', function(){
    return view("platos.consulta_categorias");
});

Route::resource('/platos', 'PlatosController');
Route::resource('/cartas', 'CartasController');
Route::resource('/ventas', 'VentasController');
Route::resource('/cartas_platos', 'CartasPlatosController');
Route::resource('/platos_ventas', 'PlatosVentasController');
Route::get('/consultar_menu','CartasPlatosController@menu');
Route::resource('/datos_platos', 'DatosPlatosController');
Route::resource('/regiones', 'RegionesController');

/////////////////////////DEFINITIVAS///////////////////////

Route::get('/consultar_menu','CartasPlatosController@menu');

Route::get('/consultar_ingredientes/{id}','DatosPlatosController@ingredientes');

Route::get('/platos_region/{id}','RegionesController@platos');

Route::get('/platos_venta/{id}','VentasController@platos');

Route::get('/nueva_prueba/{fecha_inicio}/{fecha_final}/{region_id}',function($fecha_inicio,$fecha_final,$region_id){
    $professions = DB::select(
        "SELECT sum(cantidad) as suma from plato_venta where plato_id IN 
    (SELECT id from platos where region_id=$region_id) AND venta_id IN 
    (select id from ventas where fecha BETWEEN '$fecha_inicio' AND '$fecha_final')");
    foreach($professions as $profession){
        foreach ($profession as $key => $suma){            
            $nuevo = $suma;
        }
    }
    return view ("regiones.consulta", compact("nuevo"));
});


Route::get('/consulta_horaria/{fecha_inicio}/{fecha_final}/{categoria_horaria_id}',function($fecha_inicio,$fecha_final,$categoria_horaria_id){
    $professions = DB::select(
        "SELECT sum(cantidad) as suma from plato_venta where plato_id IN 
    (SELECT id from platos where categoria_horaria_id=$categoria_horaria_id) AND venta_id IN 
    (select id from ventas where fecha BETWEEN '$fecha_inicio' AND '$fecha_final')");
    foreach($professions as $profession){
        foreach ($profession as $key => $suma){            
            $nuevo = $suma;
        }
    }
    return view ("platos.consulta", compact("nuevo"));
});

Route::get('cantidad/{fecha_inicio}/{fecha_final}',function($fecha_inicio,$fecha_final){
    $professions = DB::select("SELECT sum(cantidad) from plato_venta pv, ventas v , platos p where v.id =pv.venta_id AND pv.plato_id=p.id AND pv.venta_id IN (select id from ventas where fecha BETWEEN '$fecha_inicio' AND '$fecha_final');");
    foreach($professions as $profession){
        foreach ($profession as $key => $suma){            
            $nuevo = $suma;
        }
    }
    return view ("platos.consulta_cantidad", compact("nuevo"));
});

Route::get('dinero/{fecha_inicio}/{fecha_final}',function($fecha_inicio,$fecha_final){    
    $professions = DB::select("SELECT sum(cantidad*precio) from plato_venta pv, ventas v , platos p where v.id =pv.venta_id AND pv.plato_id=p.id AND pv.venta_id IN (select id from ventas where fecha BETWEEN '$fecha_inicio' AND '$fecha_final');");
    foreach($professions as $profession){
        foreach ($profession as $key => $suma){            
            $nuevo = $suma;
        }
    }
    return view ("platos.consulta_dinero", compact("nuevo"));
});


Route::get('/crear_consulta',function(){
    return view('regiones.crear');
});





