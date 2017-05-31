@extends('plantillas.usuario.mainUsuario')
@section('title', 'Listado de Horecas')

@section('items')
@endsection

@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Mis Horecas</h3>

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
					<th><center>Horeca</th>
					<th><center>Teléfono</th>
					<th><center>Email</th>
					<th><center>Créditos Disponibles</th>
					<th colspan="3"><center>Acciones</th>
				<tbody>
					@foreach ($horecas as $horeca)
						<tr>
							<td><center>{{ $horeca->nombre }}</td>
							<td><center>{{ $horeca->telefono }}</td>
							<td><center>{{ $horeca->email }}</td>
							<td><center>{{ $horeca->saldo }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('horeca.edit', $horeca->id ) }}"><i class="fa fa-edit"></a></td>
							<td><center><a class="btn btn-success" href="{{ route('horeca.show', $horeca->id) }}"><i class="fa fa-arrow-circle-right"></a></td>
							<td><center> 
								{!! Form::open(['route' => ['horeca.destroy', $horeca->id], 'method' => 'DELETE']) !!}
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
		<center>{!! $horecas->render() !!}</center>
	</div>

@endsection