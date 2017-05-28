@extends('plantillas.main')
@section('title', 'Usuarios')
@section('content-left')

	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Listado de Usuarios</h3>

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
					<th><center>Username</center></th>
					<th><center>Nombre</center></th>
					<th><center>Apellido</center></th>
					<th><center>Dirección</center></th>
					<th><center>Código Postal </center></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($usuarios as $usuario)
						<tr>
							<td><center>{{ $usuario->name }}</td>
							<td><center>{{ $usuario->nombre }}</td>
							<td><center>{{ $usuario->apellido }}</td>
							<td><center>{{ $usuario->direccion }}</td>
							<td><center>{{ $usuario->codigo_postal }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('usuario.edit', $usuario->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['usuario.destroy', $usuario->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-user-times"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	
	{!! $usuarios->render() !!}
@endsection

