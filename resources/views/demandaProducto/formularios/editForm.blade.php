{!! Form::open(['route' => ['demanda-producto.update', $demandaProducto->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('creador_id', '2') !!}
	{!! Form::hidden('tipo_creador', 'I') !!}

	{!! Form::hidden('producto_hidden', $demandaProducto->producto->id, ['id' => 'producto_hidden']) !!}
	{!! Form::hidden('pais_hidden', $demandaProducto->pais_id, ['id' => 'pais_hidden']) !!}
	{!! Form::hidden('provincia_hidden', $demandaProducto->provincia_region_id, ['id' => 'provincia_hidden']) !!}
	{!! Form::hidden('status_hidden', $demandaProducto->status, ['id' => 'status_hidden']) !!}

	{!! Form::label('titulo', 'Título de la Demanda') !!}
	{!! Form::text('titulo', $demandaProducto->titulo, ['class' => 'form-control', 'placeholder' => 'Ingrese el título']) !!}
	

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
	{!! Form::textarea('descripcion', $demandaProducto->descripcion, ['class' => 'form-control', 'rows' => '5']) !!}

	{!! Form::label('cantidad_minima', 'Ingrese la cantidad mínima deseada') !!}
	{!! Form::number('cantidad_minima', $demandaProducto->cantidad_minima, ['class' => ' form-control'] ) !!}

	{!! Form::label('cantidad_maxima', 'Ingrese la cantidad máxima deseada') !!}
	{!! Form::number('cantidad_maxima', $demandaProducto->cantidad_maxima, ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_creacion', 'Ingrese la Fecha de Creación') !!}
	{!! Form::date('fecha_creacion', $demandaProducto->fecha_creacion, ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_caducidad', 'Ingrese la Fecha de Caducidad de la Demanda') !!}
	{!! Form::date('fecha_caducidad', $demandaProducto->fecha_caducidad, ['class' => ' form-control'] ) !!}

	<div class="form-group">
		<select name="status" class="form-control" id="status">
			<option value="1">Activa</option>
			<option value="0">Inactiva</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}