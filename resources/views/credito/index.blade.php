@extends('plantillas.main')
@section('title', 'Planes de Créditos')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Nombre del Plan</th>
			<th>Cantidad de Créditos</th>
			<th>Precio</th>
			<th>Descripción del Plan</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($creditos as $credito)
				<tr>
					<td>{{ $credito->plan }}</td>
					<td>{{ $credito->cantidad_creditos }}</td>
					<td>{{ $credito->precio }}</td>
					<td>{{ $credito->descripcion }}</td>
					<td> <a class="btn btn-primary" href="{{ route('credito.edit', $credito->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['credito.destroy', $credito->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $creditos->render() !!}
@endsection