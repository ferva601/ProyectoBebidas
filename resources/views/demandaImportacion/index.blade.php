@extends('plantillas.main')
@section('title', 'Demanda de Importadores')
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
			@foreach ($demandaImportadores as $demandaImportador)
				<tr>
					<td>{{ $demandaImportador->productor->nombre }}</td>
					<td>{{ $demandaImportador->producto->nombre }}</td>
					<td>{{ $demandaImportador->pais->pais }}</td>
					<td>{{ $demandaImportador->provincia_region->provincia }}</td>
					<td>{{ $demandaImportador->status }}</td>
					<td> <a class="btn btn-primary" href="{{ route('demanda-importador.edit', $demandaImportador->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['demanda-importador.destroy', $demandaImportador->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $demandaImportadores->render() !!}
@endsection