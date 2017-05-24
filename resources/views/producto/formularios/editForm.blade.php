{!! Form::open(['route' => ['producto.update', $producto->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('pais_hidden', $producto->pais_id, ['id' => 'pais_hidden']) !!}
	{!! Form::hidden('provincia_hidden', $producto->provincia_region_id, ['id' => 'provincia_hidden']) !!}
	{!! Form::hidden('marca_hidden', $producto->marca_id, ['id' => 'marca_hidden']) !!}
	{!! Form::hidden('clase_bebida_hidden', $producto->clase_bebida_id, ['id' => 'clase_bebida_hidden']) !!}

	<div class="form-group">
		{!! Form::label('nombre', 'Nombre') !!}
		{!! Form::text('nombre', $producto->nombre, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre del Producto'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('nombre_seo', 'Nombre Seo') !!}
		{!! Form::text('nombre_seo', $producto->nombre_seo, ['class' => 'form-control', 'required', 'placeholder' => 'Nombre SEO del Producto'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('descripcion', 'Descripción') !!}
		{!! Form::text('descripcion', $producto->descripcion, ['class' => 'form-control', 'required', 'placeholder' => 'Descripción del Producto'] ) !!}
	</div>

	<div class="form-group">
		<select name="pais_id" id="pais_id" class="form-control">
			@foreach ($paises as $pais )
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

			<div class="form-group">
				<select name="provincia_region_id" id="provincia_id" class="form-control">
					@foreach ($provincias as $provincia )
						<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
					@endforeach
				</select>
			</div>


			<div class="form-group">
				<select name="clase_bebida_id" id="clase_bebida_id" class="form-control">
					@foreach ($bebidas as $bebida )
						<option value="{{ $bebida->id }}">{{ $bebida->clase }}</option>
					@endforeach
				</select>
			</div>

			<div class="form-group">
				<select name="marca_id" id="marca_id" class="form-control">
					@foreach ($marcas as $marca )
						<option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
					@endforeach
				</select>
			</div>
			
			<div class="form-group">
				{!! Form::label('imagen', 'Imagen') !!}
				{!! Form::file('imagen', ['class' => 'form-control', 'required'] ) !!}
			</div>

			<div class="form-group">
				{!! Form::label('ano_produccion', 'Imagen') !!}
				{!! Form::text('ano_produccion', $producto->ano_produccion, ['class' => 'form-control', 'required', 'placeholder' => 'Año de Producción'] ) !!}
			</div>

			<div class="form-group">
				{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
			</div>
		
		{!! Form::close() !!}