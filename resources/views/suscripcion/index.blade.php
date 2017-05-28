@extends('plantillas.main')
@section('title', 'Planes de Suscripción')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Planes de Suscripción</h3>

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
					<th><center>Plan</th>
					<th><center>Descripcion</th>
					<th><center>Precio</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($suscripciones as $suscripcion)
						<tr>
							<td><center>{{ $suscripcion->suscripcion }}</td>
							<td><center>{{ $suscripcion->descripcion }}</td>
							<td><center>{{ $suscripcion->precio }}</td>
							<td><center><a class="btn btn-primary" href="{{ route('suscripcion.edit', $suscripcion->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['suscripcion.destroy', $suscripcion->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $suscripciones->render() !!}
@endsection