@extends('plantillas.main')
@section('title', 'Listar-marcas')
@section('content')
<div class="col-md-3"></div>
<table>
	<thead>
		<th>Id</th>
		<th>Nombre</th>
		<th>Tipo</th>
		<th>Descripcion</th>
	</thead>

	<tbody>
		@foreach ($listas as $lista)			
		<tr>
			<td>{{ $lista->id }}</td>
			<td>{{ $lista->nombre }}</td>
			<td>{{ $lista->descripcion }}</td>
			<td>{{ $lista->reclamada }}</td>
			<td> <a class="btn btn-primary" href="{{ route('marca.edit', $lista->id ) }}">Modificar</a></td>
			<td> 
						{!! Form::open(['route' => ['marca.destroy', $lista->id], 'method' => 'DELETE']) !!}
							{!! Form::submit('Eliminar', ['class' => 'btn btn-danger']) !!}
						{!! Form::close() !!}
			</td>
		</tr>

		@endforeach
	</tbody>
</table>
{!! $listas->render() !!}

@endsection