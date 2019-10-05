 @extends('plantillas.plantilla1')
@section('titulo','Categorias')
@section('contenido')

<div class="row">
	<div class="col">
		<table class="table">
			<H2>CATEGORIAS</H2>
			<tr>
				<th>#</th>
				<th>Categoria</th>
				<th>Editar</th>
				<th>Eliminar</th>

			</tr>

@foreach($categorias as $categoria)
			<tr>
				<td>{{$loop->index+1}}</td>
				<td>{{$categoria->nombre}}</td>
				<td>
					<a class="btn btn-primary" href="{{ route ('categoria.edit',$categoria->id)}}" role="button">Editar</a>
				</td>
				<td>
					<form method="post" action="{{ route ('categoria.destroy',$categoria->id)}}">
						@csrf
						@method('DELETE')
						<button type="submit" class="btn btn-primary">Eliminar</button>
					</form>
					
				</td>
			</tr>
			
@endforeach
		</table>
	</div>
</div>





@endsection