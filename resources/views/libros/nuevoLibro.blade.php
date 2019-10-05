@extends('plantillas.plantilla1')

@section('titulo','Nuevo Libro')

@section('contenido')
		

		<div class="row">
		<div class="col">
			<h2>Nuevo Libro</h2>
				<form method="post"  action="/libros">
						@csrf
						  <div  class="form-group">
						    <label  for="titulo">Titulo</label>
						    <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Titulo de libro">
						  </div>
						  <div  class="form-group">
						    <label  for="isbn">ISBN</label>
						    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="Titulo de libro">
						  </div>
						   <div class="form-group">
						    <label for="Autor">Número de Carrera</label>
						    <input type="text" class="form-control" id="autor" name="autor" placeholder="Autor">
						  </div>
						  <div class="form-group">
						    <label for="carrera">Carrera</label>
						    <select multiple class="form-control" id="carrera_id" name="carrera">
						      <option valie="0">Selecciona una Carrerra</option>
@foreach($carreras as $carrera)
						      <option value="{{$carreras->id}}">{{$carreras->nombre}}</option>
@endforeach
						    </select>

						  </div>
						  <div class="form-group">
						    <label for="categorias">categoria</label>
						    <select multiple class="form-control" id="categoria_id" name="categoria">
						      <option valie="0">Selecciona una Categoria</option>
@foreach($carreras as $carrera)
						      <option value="{{$categorias->id}}">{{$categorias->nombre}}</option>
@endforeach
						    </select>
						    
						  </div>
						  <div>
						  		<button type="submit" class="btn btn-primary">Guardar</button>
						  </div>
				</form>		  
		</div>
	</div>




@endsection