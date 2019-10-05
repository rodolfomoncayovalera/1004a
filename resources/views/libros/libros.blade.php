@extends('plantillas.plantilla1')

@section('titulo','Libros')

@section('contenido')

	<div class="row">
		<div class="col">
			<h2>Lista de libros</h2>
			<table class="table table-hover">
				<tr>
					<th>#</th>
					<th>Titulo</th>
					<th>ISBN</th>
					<th>Autor</th>
					<th>CATEGORIA</th>
					<th>CARRERA</th>
					<th>EDITAR</th>
					<th>ELIMINAR</th>
				</tr>
@foreach($libros as $libro)
		
		<tr>
			<td>{{$loop->index+1}}</td>
			<td>{{$libro->titulo}}</td>
			<td>{{$libro->isbn}}</td>
			<td>{{$libro->autor}}</td>
			<td>{{$libro->categoria->nombre}}</td>
			<td>{{$libro->carrera->nombre}}</td>
			<td></td>
			<td></td>

		</tr>
	
@endforeach
			</table>
		</div>
	</div>


@endsection