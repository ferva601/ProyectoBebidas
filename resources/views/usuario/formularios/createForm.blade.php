{!! Form::open(['route' => 'usuario.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre de Usuario') !!}
			{!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre de Usuario'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('email', 'Correo Electrónico') !!}
			{!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::text('password', null, ['class' => 'form-control', 'placeholder' => 'Contraseña'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nombre', 'Nombre') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('apellido', 'Apellido') !!}
			{!! Form::text('apellido', null, ['class' => 'form-control', 'placeholder' => 'Apellido'] ) !!}
		</div>
		
		<div class="form-group">
			{!! Form::label('direccion', 'Dirección') !!}
			{!! Form::textarea('direccion', ['class' => 'form-control', 'placeholder' => 'Dirección'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('codigo_postal', 'Código Postal') !!}
			{!! Form::text('codigo_postal', ['class' => 'form-control', 'placeholder' => 'Código Postal'] ) !!}
		</div>

		<div class="form-group">
			<select name="pais_id" class="form-control">
				@foreach ($paises as $pais )
					<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			<select name="provincia_region_id" class="form-control">
				@foreach ($provincias as $provincia )
					<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
				@endforeach
			</select>
		</div>

		<div class="form-group">
			{!! Form::label('avatar', 'Imagen / Avatar') !!}
			{!! Form::file('avatar', ['class' => 'form-control', 'required'] ) !!}
		</div>


		<div class="form-group">
			<select name="estado_datos" class="form-control">
				<option value="Actualizados">Actualizados</option>
				<option value="Sin Actualizar">Sin Actualizar</option>
			</select>
		</div>

		<div class="form-group">
			{!! Form::submit('Agregar Usuario', ['class' => 'btn btn-primary']) !!}
		</div>
		
	{!! Form::close() !!}