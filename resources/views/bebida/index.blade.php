@extends('plantillas.main')
@section('title', 'Tipos de Bebidas')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Bebidas</h3>

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
					<th><center>Bebida</th>
					<th><center>Características</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($bebidas as $bebida)
						<tr>
							<td><center>{{ $bebida->nombre }}</td>
							<td><center>{{ $bebida->caracteristicas }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('bebida.edit', $bebida->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['bebida.destroy', $bebida->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $bebidas->render() !!}
@endsection