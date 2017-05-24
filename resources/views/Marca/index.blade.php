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
		</tr>

		@endforeach
	</tbody>
</table>
{!! $listas->render() !!}

@endsection