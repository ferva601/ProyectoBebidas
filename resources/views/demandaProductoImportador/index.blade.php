@extends('plantillas.main')
@section('title', 'Demanda de Producto | Importadores')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Título</th>
			<th>Producto</th>
			<th>Importador</th>
			<th>Cantidad Mínima</th>
			<th>Cantidad Máxima</th>
			<th>Fecha de Creación</th>
		</thead>
		<tbody>
			@foreach ($demandasProductosImportadores as $demandaProductoImportador)
				<tr>
					<td>{{ $demandaProductoImportador->titulo }}</td>
					<td>{{ $demandaProductoImportador->producto->nombre }}</td>
					<td>{{ $demandaProductoImportador->importador->nombre }}</td>
					<td>{{ $demandaProductoImportador->cantidad_minima }}</td>
					<td>{{ $demandaProductoImportador->cantidad_maxima }}</td>
					<td>{{ $demandaProductoImportador->fecha_creacion }}</td>
					<td> <a class="btn btn-primary" href="{{ route('demanda-producto-importador.edit', $demandaProductoImportador->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['demanda-producto-importador.destroy', $demandaProductoImportador->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $demandasProductosImportadores->render() !!}
@endsection