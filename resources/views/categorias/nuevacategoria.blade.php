@extends('plantillas.plantilla1')
@section('titulo','Nueva categoria')
@section('contenido')
	
	<h2>NUEVA CATEGORIA</h2>

	<div class="row">
		<div class="col">
			<form method="post" action="/categoria">
				@csrf
				  <div class="form-group">
				    <label for="categoria">Nombre de la Categoria</label>
				    <input type="text" class="form-control" id="categoria" 
				    name="nombre">

				 
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
		</div>
	</div>

@endsection