@extends("../Layouts.plantilla")

@section("header")
	Vista para mostrar los platos
@endsection	

@section("body")	
	<h1>{{$plato->nombre}}</h1>
	<h2>{{$plato->descripcion}}</h2>
	<img src="/images/{{$plato->foto}}" width="50px">
@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection