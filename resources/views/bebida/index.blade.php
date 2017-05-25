@extends('plantillas.main')
@section('title', 'Tipos de Bebidas')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Bebida</th>
			<th>Características</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($bebidas as $bebida)
				<tr>
					<td>{{ $bebida->nombre }}</td>
					<td>{{ $bebida->caracteristicas }}</td>
					<td> <a class="btn btn-primary" href="{{ route('bebida.edit', $bebida->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['bebida.destroy', $bebida->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $bebidas->render() !!}
@endsection