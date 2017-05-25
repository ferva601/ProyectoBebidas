@extends('plantillas.main')
@section('title', 'Importadores')
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
			@foreach ($importadores as $importador)
				<tr>
					<td>{{ $importador->nombre }}</td>
					<td>{{ $importador->direccion }}</td>
					<td>{{ $importador->descripcion }}</td>
					<td>{{ $importador->email }}</td>
					<td> <a class="btn btn-primary" href="{{ route('importador.edit', $importador->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['importador.destroy', $importador->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $importadores->render() !!}
@endsection