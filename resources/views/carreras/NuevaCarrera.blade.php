@extends('plantillas.plantilla1')

@section('titulo','Nueva Carrera')

@section('contenido')

	<div class="row">
		<div class="col">
			@csrf
				<form >
					<h2>Nueva Carrera</h2>
						  <div class="form-group">
						    <label  method="post" enctype=""for="nombre">Nombre</label>
						    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Carrera">
						  </div>
						  
						   <div class="form-group">
						    <label for="logo">logo</label>
						    <input type="file" class="form-control" id="logo" name="logo" placeholder="logo">
						  </div>
						   <div class="form-group">
						    <label for="numero">Nombre</label>
						    <input type="text" class="form-control" id="numero" name="numero" placeholder="Númedo de Carrera">
						  </div>
						  <div>
						  		<button type="submit" class="btn btn-primary">Guardar</button>
						  </div>
				</form>		  
		</div>
	</div>

@endsection