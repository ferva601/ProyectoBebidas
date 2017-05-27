@extends('plantillas.main')
@section('title', 'Ofertas')
@section('content')
	<table class='table table-condensed table-hover'>
		<thead>
			<th>Producto Ofertado/th>
			<th>Título</th>
			<th>Descripción</th>
			<th>Precio</th>
			<th>Acciones</th>
		</thead>
		<tbody>
			@foreach ($ofertas as $oferta)
				<tr>
					<td>{{ $oferta->producto->nombre }}</td>
					<td>{{ $oferta->titulo }}</td>
					<td>{{ $oferta->descripcion }}</td>
					<td>{{ $oferta->precio_unitario }}</td>
					<td> <a class="btn btn-primary" href="{{ route('oferta.edit', $oferta->id ) }}">Modificar</a></td>
					<td> 
						{!! Form::open(['route' => ['oferta.destroy', $oferta->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	{!! $ofertas->render() !!}
@endsection