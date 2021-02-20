
<?php


use App\Region;
use App\Categoria_Horario;
use App\Categoria_Comida;
use App\Plato;
use App\Dato;
use App\Carta;
use App\Venta;


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
    return view('welcome');
});

Route::get('/region', function(){
    foreach ( Region::all() as $region) {
        echo $region->id; echo "<br>";
        echo $region->nombre; echo "<br>";
        echo $region->nombre_encargado; echo "<br>";
    }
    
});

Route::get('/horarios', function(){
    foreach (Categoria_Horario::all() as $horario) {
        echo $horario->id; echo "<br>";
        echo $horario->nombre; echo "<br>";
        
    }  
});

Route::get('/comidas', function(){
    foreach (Categoria_Comida::all() as $comida) {
        echo $comida->id; echo "<br>";
        echo $comida->nombre; echo "<br>";
        
    } 
});


Route::get('/datos', function(){
    foreach (Dato::all() as $dato) {
        echo $dato->id; echo "<br>";
        echo $dato->nombre; echo "<br>";
        
    }  
});


Route::get('/platos', function(){
    $platos = Region::find(2)->platos;

    foreach ($platos as $plato) {
        echo $plato->id . "<br>";
        echo $plato->nombre . "<br>";
        echo $plato->nivel . "<br>";
        echo $plato->precio . "<br>";
        echo $plato->region_id . "<br>";
    }
});

//Cuales son los datos(ingredientes) del plato con id 2
Route::get('/ingredientes',function(){
    $plato = Plato::find(2);

    foreach ($plato->datos as $dato) {
        echo $dato->id . "<br>";
        echo $dato->nombre. "<br>";
    }
});

//Ejemplo, cuales son los platos de la carta con id 1
Route::get('/menu',function(){
    $carta = Carta::find(1);

    foreach ($carta->platos as $plato) {
        echo $plato->id . "<br>";
        echo $plato->nombre. "<br>";
    }
});

//Cuales son los platos de la venta con id 1
Route::get('/venta',function(){
    $venta = Venta::find(1);

    foreach ($venta->platos as $plato) {
        echo $plato->id . "<br>";
        echo $plato->nombre. "<br>";
    }
});