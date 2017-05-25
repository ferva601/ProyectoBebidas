@extends('plantillas.main')
@section('title', 'Productores')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>Descripción</th>
			<th>Email</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($productores as $productor)
				<tr>
					<td>{{ $productor->nombre }}</td>
					<td>{{ $productor->direccion }}</td>
					<td>{{ $productor->descripcion }}</td>
					<td>{{ $productor->email }}</td>
					<td> <a class="btn btn-primary" href="{{ route('productor.edit', $productor->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['productor.destroy', $productor->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $productores->render() !!}
@endsection