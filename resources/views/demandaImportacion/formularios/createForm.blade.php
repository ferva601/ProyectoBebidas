{!! Form::open(['route' => 'demanda-importador.store', 'method' => 'POST']) !!}

	{!! Form::hidden('productor_id', '1') !!}

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto') !!}
		<select name="producto_id" class="form-control">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('pais_id', 'Seleccione el país') !!}
		<select name="pais_id" class="form-control">
			@foreach ($paises as $pais )
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('provincia_region_id', 'Seleccione la provincia') !!}
		<select name="provincia_region_id" class="form-control">
			@foreach ($provincias as $provincia )
				<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el status') !!}
		<select name="status" class="form-control">
			<option value="1">Activa</option>
			<option value="0">Inactiva</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}