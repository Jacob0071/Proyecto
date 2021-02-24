<title>Descripción Platos</title>
@extends("../Layouts.plantilla")

@section("header")
	Vista para mostrar los platos
@endsection	

@section("body")	
	<div id="datos_platos">
	<h1>{{$plato->nombre}}</h1>
	<h3>Descripción</h3>
	<p>{{$plato->descripcion}}</p>
	<h3>Nivel de Dificultad</h3>
	<p>{{$plato->nivel}}</p>
	<!--<a class="link" href="{{ url('/ingredientes/{nuevo}') }}">Ver Ingredientes</a>-->
	
	<img src="/images/{{$plato->foto}}" class="rounded mx-auto d-block" alt="plato" width="500px">
	<input id="agregar_ingrediente" type="submit" value="Agregar Ingrediente" align="center" onclick = "location='/datos_platos/create'"/>
</div>
@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection