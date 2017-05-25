@extends('plantillas.main')
@section('title', 'Productos')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Nombre</th>
			<th>Descripcion</th>
			<th>Año de Produccion</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($productos as $producto)
				<tr>
					<td>{{ $producto->nombre }}</td>
					<td>{{ $producto->descripcion }}</td>
					<td>{{ $producto->ano_produccion }}</td>
					<td> <a class="btn btn-primary" href="{{ route('producto.edit', $producto->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['producto.destroy', $producto->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $productos->render() !!}
@endsection