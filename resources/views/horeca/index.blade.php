@extends('plantillas.main')
@section('title', 'Horecas')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Horecas</h3>

			<div class="box-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                	<input type="text" name="table_search" class="form-control pull-right" placeholder="Search">
                  	<div class="input-group-btn">
                    	<button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                  	</div>
                </div>
            </div>
		</div>

		<div class="box-body table-responsive no-padding">
			<table class='table table-condensed table-hover'>
				<thead>
					<th><center>Usuario Propietario</th>
					<th><center>Nombre</th>
					<th><center>País</th>
					<th><center>Email</th>
					<th><center>Tipo de Horeca</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($horecas as $horeca)
						<tr>
							<td><center>{{ $horeca->user->nombre }}</td>
							<td><center>{{ $horeca->nombre }}</td>
							<td><center>{{ $horeca->direccion }}</td>
							<td><center>{{ $horeca->email }}</td>
							<td><center>{{ $horeca->tipo_horeca }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('horeca.edit', $horeca->id ) }}"><i class="fa fa-edit"></i></a></td>
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
	{!! $horecas->render() !!}
@endsection