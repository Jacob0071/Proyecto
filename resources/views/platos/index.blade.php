@extends("../Layouts.plantilla")

@section("header")
	Vista para mostrar los platos
@endsection	

@section("body")	
<table border="1">
		<tr>
			<td>Id</td>
			<td>Nombre</td>
			<td>Descripcion</td>
			<td>Nivel</td>
			<td>Precio</td>
			<td>Foto</td>
            <td>Categoria de Comida</td>
            <td>Categoria Horaria</td>
            <td>Region</td>
		</tr>
		<tr>
	@foreach($platos as $plato)
            <td>
                <a href="{{route('platos.show', $plato->id)}}">
                    {{$plato->id}}	
                </a>
			</td>
			<td>
				{{$plato->nombre}}	
			</td>	
			<td>
				{{$plato->descripcion}}
			</td>
			<td>
				{{$plato->nivel}}
			</td>
			<td>
				{{$plato->precio}}
			</td>
            <td>
                <img src="/images/{{$plato->foto}}" width="50px">				
			</td>
            <td>
				{{$plato->categoria_comida_id}}
			</td>
            <td>
				{{$plato->categoria_horaria_id}}
			</td>
			<td>
				{{$plato->region_id}}
			</td>
            <td>
            <a href="{{route('platos.edit', $plato->id)}}">
                <img src="/images/editar.png" class="logoEditar" width="50px"/>
            </a>
            </td>
		</tr>
	@endforeach
	</table>


@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection