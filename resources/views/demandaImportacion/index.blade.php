@extends('plantillas.main')
@section('title', 'Demanda de Importadores')
@section('content-left')
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Demandas de Importaciones</h3>

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
					<th><center>Producto</th>
					<th><center>País</th>
					<th><center>Provincia</th>
					<th><center>Status</th>
					<th></th>
					<th></th>
				</thead>
				<tbody>
					@foreach ($demandaImportadores as $demandaImportador)
						<tr>
							<td><center>{{ $demandaImportador->productor->nombre }}</td>
							<td><center>{{ $demandaImportador->producto->nombre }}</td>
							<td><center>{{ $demandaImportador->pais->pais }}</td>
							<td><center>{{ $demandaImportador->provincia_region->provincia }}</td>
							<td><center>{{ $demandaImportador->status }}</td>
							<td><center> <a class="btn btn-primary" href="{{ route('demanda-importador.edit', $demandaImportador->id ) }}"><i class="fa fa-edit"></i></a></td>
							<td><center> 
								{!! Form::open(['route' => ['demanda-importador.destroy', $demandaImportador->id], 'method' => 'DELETE']) !!}
									<button type="submit" class="btn btn-danger"><i class="fa fa-trash-o"></i></button>
								{!! Form::close() !!}
							</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>
	{!! $demandaImportadores->render() !!}
@endsection