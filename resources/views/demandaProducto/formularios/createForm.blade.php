{!! Form::open(['route' => 'demanda-producto.store', 'method' => 'POST']) !!}

	{!! Form::hidden('creador_id', '1') !!}

	{!! Form::hidden('tipo_creador', 'I') !!}

	{!! Form::label('titulo', 'Título de la Demanda') !!}
	{!! Form::text('titulo', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el título']) !!}

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto a demandar') !!}
		<select name="producto_id" class="form-control">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('pais_id', 'Seleccione el país en el cual se encuentra') !!}
		<select name="pais_id" class="form-control">
			@foreach ($paises as $pais )
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('provincia_region_id', 'Seleccione la provincia en la cual se encuentra') !!}
		<select name="provincia_region_id" class="form-control">
			@foreach ($provincias as $provincia )
				<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
			@endforeach
		</select>
	</div>

	{!! Form::label('descripcion', 'Descripción de la demanda') !!}
	{!! Form::textarea('descripcion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese una breve descripción']) !!}

	{!! Form::label('cantidad_minima', 'Ingrese la cantidad mínima deseada') !!}
	{!! Form::number('cantidad_minima', '0', ['class' => ' form-control'] ) !!}

	{!! Form::label('cantidad_maxima', 'Ingrese la cantidad máxima deseada') !!}
	{!! Form::number('cantidad_maxima', '0', ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_creacion', 'Ingrese la Fecha de Creación') !!}
	{!! Form::date('fecha_creacion', '0', ['class' => ' form-control'] ) !!}

	{!! Form::label('fecha_caducidad', 'Ingrese la Fecha de Caducidad de la Demanda') !!}
	{!! Form::date('fecha_caducidad', '0', ['class' => ' form-control'] ) !!}

	<div class="form-group">
		<select name="status" class="form-control">
			<option value="1">Activa</option>
			<option value="0">Inactiva</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
{!! Form::close() !!}