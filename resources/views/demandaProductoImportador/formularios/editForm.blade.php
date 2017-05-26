{!! Form::open(['route' => ['demanda-producto-importador.update', $demandaProductoImportador->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('importador_id', '2') !!}

	{!! Form::hidden('producto_hidden', $demandaProductoImportador->producto->id, ['id' => 'producto_hidden']) !!}
	{!! Form::hidden('pais_hidden', $demandaProductoImportador->pais_id, ['id' => 'pais_hidden']) !!}
	{!! Form::hidden('provincia_hidden', $demandaProductoImportador->provincia_region_id, ['id' => 'provincia_hidden']) !!}

	{!! Form::label('titulo', 'Título de la Demanda') !!}
	{!! Form::text('titulo', $demandaProductoImportador->titulo, ['class' => 'form-control', 'placeholder' => 'Ingrese el título']) !!}
	

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto a demandar') !!}
		<select name="producto_id" id="producto_id" class="form-control">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('pais_id', 'Seleccione el país en el cual se encuentra') !!}
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

	{!! Form::label('descripcion', 'Descripción de la demanda') !!}
	{!! Form::textarea('descripcion', $demandaProductoImportador->descripcion, ['class' => 'form-control', 'rows' => '5']) !!}

	{!! Form::label('cantidad_minima', 'Ingrese la cantidad mínima deseada') !!}
	{!! Form::number('cantidad_minima', $demandaProductoImportador->cantidad_minima, ['class' => ' form-control'] ) !!}

	{!! Form::label('cantidad_maxima', 'Ingrese la cantidad máxima deseada') !!}
	{!! Form::number('cantidad_maxima', $demandaProductoImportador->cantidad_maxima, ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_creacion', 'Ingrese la Fecha de Creación') !!}
	{!! Form::date('fecha_creacion', $demandaProductoImportador->fecha_creacion, ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_caducidad', 'Ingrese la Fecha de Caducidad de la Demanda') !!}
	{!! Form::date('fecha_caducidad', $demandaProductoImportador->fecha_caducidad, ['class' => ' form-control'] ) !!}

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}