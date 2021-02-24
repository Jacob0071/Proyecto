@extends("../Layouts.plantilla")

<title>Platos</title>

@section("nav")

@endsection	

@section("body")	

<input id="agregar_plato" type="submit" value="Agregar" onclick = "location='/platos/create'"/>

<table class="table table-bordered" id="table_platos">
  <thead>
    <tr>
     	<th scope="col">Id</th>
		<th scope="col">Nombre</th>
		<th scope="col">Nivel</th>
		<th scope="col">Precio</th>
        <th scope="col">Categoria de Comida</th>
        <th scope="col">Categoria Horaria</th>
        <th scope="col">Region</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    	@foreach($platos as $plato)
      		<td>
                <a href="{{route('platos.show', $plato->id)}}" title="Consultar Descripción">
                    {{$plato->id}}	
                </a>
			</td>
			<td>
				{{$plato->nombre}}	
			</td>	
			<td>
				{{$plato->nivel}}
			</td>
			<td>
				{{$plato->precio}}
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
                <img src="/images/editar.png" class="logoEditar" width="40px" title="Modificar Plato"/>
			</a>
			<a href="{{url('consultar_ingredientes', $plato->id)}}">
                <img src="/images/libro-de-recetas.png" class="logoIngredientes" width="40px" title="Consultar Ingredientes"/>
            </a>
            </td>

    </tr>
    @endforeach
  </tbody>
</table>


@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection


