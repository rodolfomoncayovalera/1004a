@extends('plantillas.plantilla1')

@section('titulo','Nuevo Rol')

@section('contenido')

<h2>NUEVO ROL</h2>

	<div class="row">
		<div class="col">
			<form method="post" action="/roles">
				@csrf
				  <div class="form-group">
				    <label for="rol">Nombre de la Rol</label>
				    <input type="text" class="form-control" id="rol" 
				    name="nombre">

				 
				  <button type="submit" class="btn btn-primary">Guardar</button>
				</form>
		</div>
	</div>



@endsection