@extends('plantillas.main')
@section('title', 'Ofertas')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Ofertas</h3>

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
					<th><center>Producto Ofertado</th>
					<th><center>Título</th>
					<th><center>Descripción</th>
					<th><center>Precio</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($ofertas as $oferta)
						<tr>
							<td><center>{{ $oferta->producto->nombre }}</td>
							<td><center>{{ $oferta->titulo }}</td>
							<td><center>{{ $oferta->descripcion }}</td>
							<td><center>{{ $oferta->precio_unitario }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('oferta.edit', $oferta->id ) }}"><i class="fa fa-edit"></a></td>
							<td><center> 
								{!! Form::open(['route' => ['oferta.destroy', $oferta->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $ofertas->render() !!}
@endsection