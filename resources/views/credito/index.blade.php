@extends('plantillas.main')
@section('title', 'Planes de Créditos')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Planes de Crédito</h3>

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
					<th><center>Nombre del Plan</th>
					<th><center>Cantidad de Créditos</th>
					<th><center>Precio</th>
					<th><center>Descripción del Plan</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($creditos as $credito)
						<tr>
							<td><center>{{ $credito->plan }}</td>
							<td><center>{{ $credito->cantidad_creditos }}</td>
							<td><center>{{ $credito->precio }}</td>
							<td><center>{{ $credito->descripcion }}</td>
							<td><center><a class="btn btn-primary" href="{{ route('credito.edit', $credito->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['credito.destroy', $credito->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $creditos->render() !!}
@endsection