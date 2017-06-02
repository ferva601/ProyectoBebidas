@extends('plantillas.main')
@section('content-left')

	
	<div class="container text-center">
		<div class="page-header">
			<h1><i class="fa fa-shopping"></i> Lista de Miembros</h1>
		</div>

		<div class="table-responsive">
			<table class="table table-striped table-hover table-bordered">
				<thead>
					<tr>
						<th>id</th>
						<th>Nombre</th>
						<th>Telefono</th>
						<th>email</th>
						<th>saldo</th>
						<th>logo</th>
						<th>pais</th>
					</tr>
				</thead>
					<tbody>
						@foreach ($produtores as $productor)
							<tr>
								<td>{{ $produtor->id }}</td>
								<td>{{ $produtor->Nombre }}</td>
								<td>{{ $produtor->Telefono }}</td>
								<td>{{ $produtor->email }}</td>
								<td>{{ number_format($produtor->saldo) }}</td>
								<td>< img src="{{ $produtor->logo }}></td>
								<td>{{ $produtor->pais }}</td>
								<td>
									<a href="#" class="btn bt-warnig">
										<i class="btn bt-warnig">siguiente</i>
									</a>
								</td>	
							</tr>
				
						@endforeach
					</tbody>				
			</table>
		</div>

	</div>

@stop
