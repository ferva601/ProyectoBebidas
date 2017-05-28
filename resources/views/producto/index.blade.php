@extends('plantillas.main')
@section('title', 'Productos')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Productos</h3>

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
					<th><center>Descripcion</th>
					<th><center>Año de Produccion</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($productos as $producto)
						<tr>
							<td><center>{{ $producto->nombre }}</td>
							<td><center>{{ $producto->descripcion }}</td>
							<td><center>{{ $producto->ano_produccion }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('producto.edit', $producto->id ) }}"><i class="fa fa-edit"></a></td>
							<td> <center>
								{!! Form::open(['route' => ['producto.destroy', $producto->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $productos->render() !!}
@endsection