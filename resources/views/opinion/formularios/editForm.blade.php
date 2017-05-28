{!! Form::open(['route' => ['opinion.update', $opinion->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('tipo_creador', 'P') !!}
	{!! Form::hidden('creador_id', '1') !!}
	{!! Form::hidden('producto_hidden', $opinion->producto_id, ['id' => 'producto_hidden']) !!}

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto que quiere opinar') !!}
		<select name="producto_id" class="form-control" id="producto_id">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('valoracion', 'Valoración') !!}
		{!! Form::number('valoracion', $opinion->valoracion, ['class' => 'form-control', 'placeholder' => 'Valoración'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('comentario', 'Comentario') !!}
		{!! Form::textarea('comentario', $opinion->comentario, ['class' => 'form-control', 'placeholder' => 'Comentario', 'rows' => '3'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fecha', 'Fecha') !!}
		{!! Form::date('fecha', $opinion->fecha, ['class' => 'form-control' ] ) !!}
	</div>
	
	{!! Form::hidden('editada', '1') !!}

	<div class="form-group">
		{!! Form::label('fecha_ultima_edicion', 'Fecha de Edición') !!}
		{!! Form::date('fecha_ultima_edicion', $opinion->fecha_ultima_edicion, ['class' => 'form-control' ] ) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
		
{!! Form::close() !!}