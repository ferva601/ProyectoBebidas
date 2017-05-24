@extends('plantillas.main')
@section('title', 'Usuarios')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Username</th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Dirección</th>
			<th>Código Postal</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($usuarios as $usuario)
				<tr>
					<td>{{ $usuario->name }}</td>
					<td>{{ $usuario->nombre }}</td>
					<td>{{ $usuario->apellido }}</td>
					<td> <a class="btn btn-primary" href="{{ route('usuario.edit', $usuario->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['usuario.destroy', $usuario->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $usuarios->render() !!}
@endsection