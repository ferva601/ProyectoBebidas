@extends('plantillas.main')
@section('title', 'Demanda de Producto | Importadores')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Demandas de Productos</h3>

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
					<th><center>Título</th>
					<th><center>Producto</th>
					<th><center>Importador</th>
					<th><center>Cantidad Mínima</th>
					<th><center>Cantidad Máxima</th>
					<th><center>Fecha de Creación</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($demandasProductos as $demandaProducto)
						<tr>
							<td><center>{{ $demandaProducto->titulo }}</td>
							<td><center>{{ $demandaProducto->producto->nombre }}</td>
							<td><center>{{ $demandaProducto->creador_id}}</td>
							<td><center>{{ $demandaProducto->cantidad_minima }}</td>
							<td><center>{{ $demandaProducto->cantidad_maxima }}</td>
							<td><center>{{ $demandaProducto->fecha_creacion }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('demanda-producto.edit', $demandaProducto->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['demanda-producto.destroy', $demandaProducto->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $demandasProductos->render() !!}
@endsection