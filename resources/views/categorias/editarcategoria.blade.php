@extends('plantillas.plantilla1')
@section('titulo','Nueva categoria')
@section('contenido')
	
	<h2>NUEVA CATEGORIA</h2>

	<div class="row">
		<div class="col">
			<form method="post" action="{{route('categoria.update',$categoria->id)}}">
				@csrf
				<input type="hidden" name="_method"  value="PUT">
				  <div class="form-group">
				    <label for="categoria">Nombre de la Categoria</label>
				    <input type="text" class="form-control" id="categoria" 
				    name="nombre" value="{{$categoria->nombre}}">

				 
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
		</div>
	</div>

@endsection