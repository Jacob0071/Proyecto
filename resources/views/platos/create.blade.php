@extends("../Layouts.plantilla")

@section("header")
	Vista Principal para los Platos
@endsection	

@section("body")
    {!! Form::open(['url' => '/platos','method' => 'post','files' => true]) !!}	
        <table>
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
                <td>{!!Form::label('categoria_comida_id', 'Categoria de Comida:')!!}</td>
                <td>
                    {!!Form::text('categoria_comida_id')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('categoria_horaria_id', 'Categoria Horaria:')!!}</td>
                <td>
                    {!!Form::text('categoria_horaria_id')!!}
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>{!!Form::label('region', 'Region:')!!}</td>
                <td>
                    {!!Form::text('region_id')!!}
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
        <table>
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