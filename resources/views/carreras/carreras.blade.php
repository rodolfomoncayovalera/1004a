@extends('plantillas.plantilla1')

@section('titulo','Nueva Carrera')

@section('contenido')



	<div class="row">
		<div class="col">
			<br><br>
			<h2>Lista de Carreras</h2>
			<table class="table table">
				<tr>
					<th>#</th>
					<th>LOGO</th>
					<th>NOMBRE</th>
					<th>EDIRAR</th>
					<th>ELIMINAR</th>
@foreach($carreras as $carrera)
 	<tr>
 		<td>{{$carrera->numero}}</td>
 		<td>
 			<img class="img-carrera" src="{{asset('/img/'.$carrera->logo)}}">
 			</td>
 		<td>{{$carrera->nombre}}</td>
 		<button type="submit" class="btn btn-primary">Submit</button>
 	</tr>

@endforeach
				</tr>
			</table>
		</div>
	</div>




@endsection