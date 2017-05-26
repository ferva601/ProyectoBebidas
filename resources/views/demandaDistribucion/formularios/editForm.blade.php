{!! Form::open(['route' => ['demanda-distribuidor.update', $demandaDistribuidor->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('productor_id', '2') !!}
	{!! Form::hidden('producto_hidden', $demandaDistribuidor->producto_id, ['id' => 'producto_hidden']) !!}
	{!! Form::hidden('pais_hidden', $demandaDistribuidor->pais_id, ['id' => 'pais_hidden']) !!}
	{!! Form::hidden('provincia_hidden', $demandaDistribuidor->provincia_region_id, ['id' => 'provincia_hidden']) !!}
	{!! Form::hidden('status_hidden', $demandaDistribuidor->status, ['id' => 'status_hidden']) !!}


	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto') !!}
		<select name="producto_id" id="producto_id" class="form-control">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('pais_id', 'Seleccione el país') !!}
		<select name="pais_id" id="pais_id" class="form-control">
			@foreach ($paises as $pais )
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('provincia_region_id', 'Seleccione la provincia') !!}
		<select name="provincia_region_id" id="provincia_id" class="form-control">
			@foreach ($provincias as $provincia )
				<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el status') !!}
		<select name="status" id="status" class="form-control">
			<option value="Activa">Activa</option>
			<option value="Inactiva">Inactiva</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}