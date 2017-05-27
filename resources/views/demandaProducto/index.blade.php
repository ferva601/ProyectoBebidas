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
			@foreach ($demandasProductos as $demandaProducto)
				<tr>
					<td>{{ $demandaProducto->titulo }}</td>
					<td>{{ $demandaProducto->producto->nombre }}</td>
					<td>{{ $demandaProducto->creador_id}}</td>
					<td>{{ $demandaProducto->cantidad_minima }}</td>
					<td>{{ $demandaProducto->cantidad_maxima }}</td>
					<td>{{ $demandaProducto->fecha_creacion }}</td>
					<td> <a class="btn btn-primary" href="{{ route('demanda-producto.edit', $demandaProducto->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['demanda-producto.destroy', $demandaProducto->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $demandasProductos->render() !!}
@endsection