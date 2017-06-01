@extends('plantillas.main')
@section('title', 'Productores')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Productores</h3>

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
					<th><center>Nombre</th>
					<th><center>Dirección</th>
					<th><center>Descripción</th>
					<th><center>Email</th>
					<th></th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($productores as $productor)
						<tr>
							<td><center>{{ $productor->nombre }}</td>
							<td><center>{{ $productor->direccion }}</td>
							<td><center>{{ $productor->descripcion }}</td>
							<td><center>{{ $productor->email }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('productor.edit', $productor->id ) }}"><i class="fa fa-edit"></a></td>
							<td><a class="btn btn-success" href="{{ route('productor.show', $productor->id) }}"><i class="fa fa-arrow-circle-right"></a></td>
							<td><center> 
								{!! Form::open(['route' => ['productor.destroy', $productor->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $productores->render() !!}

@endsection