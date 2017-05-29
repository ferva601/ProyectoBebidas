{!! Form::open(['route' => ['oferta.update', $oferta->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('tipo_creador', 'D') !!}
	{!! Form::hidden('creador_id', '1') !!}
	{!! Form::hidden('visible_importadores', '1') !!}
	{!! Form::hidden('visible_distribuidores', '1') !!}
	{!! Form::hidden('visible_horecas', '1') !!}

	{!! Form::hidden('producto_hidden', $oferta->producto_id, ['id' => 'producto_hidden']) !!}
	{!! Form::hidden('envio_hidden', $oferta->envio, ['id' => 'envio_hidden']) !!}

	<div class="form-group">
		{!! Form::label('producto_id', 'Seleccione el producto') !!}
		<select name="producto_id" class="form-control" id="producto_id">
			@foreach ($productos as $producto) 
				<option value="{{ $producto->id }}">{{ $producto->nombre }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('titulo', 'Título') !!}
		{!! Form::text('titulo', $oferta->titulo, ['class' => 'form-control', 'placeholder' => 'Título'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('descripcion', 'Descripcion') !!}
		{!! Form::textarea('descripcion', $oferta->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripcion'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('precio_unitario', 'Precio por Unidad') !!}
		{!! Form::text('precio_unitario', $oferta->precio_unitario, ['class' => 'form-control', 'placeholder' => 'Precio por Unidad'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('precio_lote', 'Precio por el Lote') !!}
		{!! Form::text('precio_lote', $oferta->precio_lote, ['class' => 'form-control', 'placeholder' => 'Precio por el Lote'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('cantidad_producto', 'Cantidad de Productos') !!}
		{!! Form::number('cantidad_producto', $oferta->cantidad_producto, ['class' => 'form-control', 'placeholder' => 'Cantidad de Productos'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('cantidad_caja', 'Cantidad de Cajas') !!}
		{!! Form::number('cantidad_caja', $oferta->cantidad_caja, ['class' => 'form-control', 'placeholder' => 'Cantidad de Cajas'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('cantidad_minima', 'Cantidad Mínima de Venta') !!}
		{!! Form::number('cantidad_minima', $oferta->cantidad_minima, ['class' => 'form-control', 'placeholder' => 'Cantidad Mínima de Venta'] ) !!}
	</div>

	<div class="form-group">
		<select name="envio" class="form-control" id="envio">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::label('costo_envio', 'Costo del Envío') !!}
		{!! Form::text('costo_envio', $oferta->costo_envio, ['class' => 'form-control', 'placeholder' => 'Costo del Envío'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
	</div>
		
		
	{!! Form::close() !!}