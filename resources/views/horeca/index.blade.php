@extends('plantillas.main')
@section('title', 'Horecas')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Usuario Propietario</th>
			<th>Nombre</th>
			<th>Dirección</th>
			<th>País</th>
			<th>Email</th>
			<th>Tipo de Horeca</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($horecas as $horeca)
				<tr>
					<td>{{ $horeca->user_id }}</td>
					<td>{{ $horeca->nombre }}</td>
					<td>{{ $horeca->direccion }}</td>
					<td>{{ $horeca->pais_id }}</td>
					<td>{{ $horeca->email }}</td>
					<td>{{ $horeca->tipo_horeca }}</td>
					<td> <a class="btn btn-primary" href="{{ route('horeca.edit', $horeca->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['horeca.destroy', $horeca->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $horecas->render() !!}
@endsection