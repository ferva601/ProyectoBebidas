@extends('plantillas.usuario.mainUsuario')
@section('title', 'Listado de Distribuidores')

@section('items')
@endsection

@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Mis Distribuidores</h3>

			<div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                	<input type="text" name="table_search" class="form-control pull-right" placeholder="Buscar">
                  	<div class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  	</div>
                </div>
            </div>
		</div>

		<div class="box-body table-responsive no-padding">
			<table class='table table-condensed table-hover'>
				<thead>
					<th><center>Distribuidor</th>
					<th><center>Teléfono</th>
					<th><center>Email</th>
					<th><center>Créditos Disponibles</th>
					<th colspan="3"><center>Acciones</th>
				<tbody>
					@foreach ($distribuidores as $distribuidor)
						<tr>
							<td><center>{{ $distribuidor->nombre }}</td>
							<td><center>{{ $distribuidor->telefono }}</td>
							<td><center>{{ $distribuidor->email }}</td>
							<td><center>{{ $distribuidor->saldo }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('distribuidor.edit', $distribuidor->id ) }}"><i class="fa fa-edit"></a></td>
							<td><center><a class="btn btn-success" href="{{ route('distribuidor.show', $distribuidor->id) }}"><i class="fa fa-arrow-circle-right"></a></td>
							<td><center> 
								{!! Form::open(['route' => ['distribuidor.destroy', $distribuidor->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>

	<div>
		<center>{!! $distribuidores->render() !!}</center>
	</div>

@endsection