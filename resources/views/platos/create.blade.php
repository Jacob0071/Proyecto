@extends("../Layouts.plantilla")

<title>Agregar Plato</title>

@section("body")
    {!! Form::open(['url' => '/platos','method' => 'post','files' => true]) !!}	
    <h1>Agregar Plato</h1>
        <table id="agregar_plato_table" class="table table-bordered">
            <tr>
                <td>{!!Form::label('id', 'Id:')!!}</td>
                <td>
                    {!!Form::text('id')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('nombre', 'Nombre:')!!}</td>
                <td>
                    {!!Form::text('nombre')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('descripcion', 'Descripcion:')!!}</td>
                <td>
                    {!!Form::text('descripcion')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('nivel', 'Nivel:')!!}</td>
                <td>
                    {!!Form::text('nivel')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('precio', 'Precio:')!!}</td>
                <td>
                    {!!Form::text('precio')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
            <td>Categoria Comida:</td>
            <td>

            <select name="categoria_comida_id" id="developers">
                <option value="">Categoria Comida</option>
                @foreach($categoria_comida as $categoria)
                <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                @endforeach
            </select>
            
            {{csrf_field()}}	
            </td>
            </tr>
            
            <tr>
                <td>Categoria Horaria:</td>
                <td>
                <select name="categoria_horaria_id" id="developers">
                    <option value="">Categoria Horaria</option>
                    @foreach($categoria_horaria as $categoria)
                    <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                    @endforeach
                </select>
                {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Region:</td>
                <td>
                <select name="region_id" id="developers">
                    <option value="">  Region</option>
                    @foreach($regiones as $region)
                    <option value="{{ $region->id }}">{{ $region->nombre }}</option>
                    @endforeach
                </select>
                {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>
                    {!!Form::submit('Enviar')!!}
                </td>
                <td>
                    {!!Form::submit('Borrar')!!}                    
                </td>
            </tr>
        </table>
        <table id="boton_imagen">
            <tr>
                <td>
                    {!!Form::file('file')!!}
                </td>
            </tr>
        </table>
        {!! Form::close() !!}

        @if(count($errors)>0)
		@foreach($errors->all() as $error)
			{{$error}}
		@endforeach

	@endif
@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection