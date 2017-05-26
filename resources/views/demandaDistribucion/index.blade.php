@extends('plantillas.main')
@section('title', 'Demanda de Distribuidores')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Productor</th>
			<th>Producto</th>
			<th>Pís</th>
			<th>Provincia</th>
			<th>Status</th>
		</thead>
		<tbody>
			@foreach ($demandaDistribuidores as $demandaDistribuidor)
				<tr>
					<td>{{ $demandaDistribuidor->productor->nombre }}</td>
					<td>{{ $demandaDistribuidor->producto->nombre }}</td>
					<td>{{ $demandaDistribuidor->pais->pais }}</td>
					<td>{{ $demandaDistribuidor->provincia_region->provincia }}</td>
					<td>{{ $demandaDistribuidor->status }}</td>
					<td> <a class="btn btn-primary" href="{{ route('demanda-distribuidor.edit', $demandaDistribuidor->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['demanda-distribuidor.destroy', $demandaDistribuidor->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $demandaDistribuidores->render() !!}
@endsection