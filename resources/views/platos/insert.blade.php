@extends("../Layouts.plantilla")

@section("header")
	Vista Principal para los Platos
@endsection	

@section("body")	
    <h1>Formulario para ingresar platos</h1>
    <form method="post" action="/platos">

        <input type="text" name="nombre">
        {{csrf_field()}}
        <input type="submit" name="Enviar">
    </form>
@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection