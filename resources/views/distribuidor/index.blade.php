@extends('plantillas.main')
@section('title', 'Distribuidores')
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
			@foreach ($distribuidores as $distribuidor)
				<tr>
					<td>{{ $distribuidor->nombre }}</td>
					<td>{{ $distribuidor->direccion }}</td>
					<td>{{ $distribuidor->descripcion }}</td>
					<td>{{ $distribuidor->email }}</td>
					<td> <a class="btn btn-primary" href="{{ route('distribuidor.edit', $distribuidor->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['distribuidor.destroy', $distribuidor->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $distribuidores->render() !!}
@endsection