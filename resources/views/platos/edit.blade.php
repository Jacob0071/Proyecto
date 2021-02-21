@extends("../Layouts.plantilla")

@section("header")
	Vista para editar los Platos
@endsection	

@section("body")	

{!!Form::model($plato,['method'=>'POST','action'=>['PlatosController@update',$plato->id]])!!}  
        <table>
        
            <tr>
                <td>Id:</td>
                <td>
                    <input type="text" name="id" value="{{$plato->id}}">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="PUT">
                </td>
            </tr>
            <tr>
                <td>Nombre:</td>
                <td>
                    <input type="text" name="nombre" value="{{$plato->nombre}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Descripcion:</td>
                <td>
                    <input type="text" name="descripcion" value="{{$plato->descripcion}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Nivel:</td>
                <td>
                    <input type="text" name="nivel" value="{{$plato->nivel}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Precio:</td>
                <td>
                    <input type="text" name="precio" value="{{$plato->precio}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Categoria de Comida:</td>
                <td>
                    <input type="text" name="categoria_comida_id" value="{{$plato->categoria_comida_id}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Categoria Horaria:</td>
                <td>
                    <input type="text" name="categoria_horaria_id" value="{{$plato->categoria_horaria_id}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>Region:</td>
                <td>
                    <input type="text" name="region_id" value="{{$plato->region_id}}">
                    {{csrf_field()}}
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="Actualizar">
                </td>
                <td>
                    <input type="reset" name="Limpiar">
                </td>
            </tr>
        </table>
    {!! Form::close()!!}
    {!!Form::open(['method'=>'DELETE','action'=>['PlatosController@destroy',$plato->id]])!!}
		{{csrf_field()}}	
		<input type="hidden" name="_method" value="DELETE">
		<input type="submit" name="" value="Eliminar">
    {!! Form::close()!!}
@endsection	

@section('footer')
    <footer>Este es el pie de pagina de la vista Principal de platos</footer>
@endsection