{!! Form::open(['route' => ['suscripcion.update', $suscripcion->id ], 'method' => 'PUT']) !!}
	<div class="form-group">
		{!! Form::label('suscripcion', 'Nombre del Plan de Suscripcion') !!}
		{!! Form::text('suscripcion', $suscripcion->suscripcion, ['class' => 'form-control', 'placeholder' => 'Nombre del Plan de Suscripción'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('precio', 'Precio') !!}
		{!! Form::text('precio', $suscripcion->precio, ['class' => 'form-control', 'placeholder' => 'Precio'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::label('descripcion', 'Descripción') !!}
		{!! Form::textarea('descripcion', $suscripcion->descripcion, ['class' => 'form-control', 'placeholder' => 'Descripción del Plan', 'rows' => '4'] ) !!}
	</div>

	<div class="form-group">
		{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
	</div>
		
{!! Form::close() !!}