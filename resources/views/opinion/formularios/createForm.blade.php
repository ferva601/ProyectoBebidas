{!! Form::open(['route' => 'opinion.store', 'method' => 'POST']) !!}

	{!! Form::hidden('tipo_creador', 'P') !!}
	{!! Form::hidden('creador_id', '1') !!}

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto que quiere opinar') !!}
		<select name="producto_id" class="form-control">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('valoracion', 'Valoración') !!}
		{!! Form::number('valoracion', null, ['class' => 'form-control', 'placeholder' => 'Valoración'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('comentario', 'Comentario') !!}
		{!! Form::textarea('comentario', null, ['class' => 'form-control', 'placeholder' => 'Comentario', 'rows' => '3'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('fecha', 'Fecha') !!}
		{!! Form::date('fecha', null, ['class' => 'form-control' ] ) !!}
	</div>
	
	{!! Form::hidden('editada', '0') !!}

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
		
		
	{!! Form::close() !!}