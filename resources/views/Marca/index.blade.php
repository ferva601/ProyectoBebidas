@extends('plantillas.main')
@section('title', 'Listar-marcas')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Marcas</h3>

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
					<th><center>Productor</th>
					<th><center>Nombre</th>
					<th><center>Descripcion</th>
					<th><center>Reclamada</th>
					<th></th>
					<th></th>
				</thead>

				<tbody>
					@foreach ($listas as $lista)			
					<tr>
						<td><center>{{ $lista->productor->nombre}}</td>
						<td><center>{{ $lista->nombre }}</td>
						<td><center>{{ $lista->descripcion }}</td>
						<td><center>{{ $lista->reclamada }}</td>
						<td><center> <a class="btn btn-primary" href="{{ route('marca.edit', $lista->id ) }}"><i class="fa fa-edit"></i></a></td>
						<td><center> 
							{!! Form::open(['route' => ['marca.destroy', $lista->id], 'method' => 'DELETE']) !!}
								<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
							{!! Form::close() !!}
						</td>
					</tr>

					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $listas->render() !!}

@endsection