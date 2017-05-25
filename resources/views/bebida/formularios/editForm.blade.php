{!! Form::open(['route' => ['bebida.update', $bebida->id], 'method' => 'PUT']) !!}
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre del Tipo de Bebida') !!}
			{!! Form::text('nombre', $bebida->nombre, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('caracteristicas', 'Características') !!}
			{!! Form::textarea('caracteristicas', $bebida->caracteristicas, ['class' => 'form-control'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Actualizar', ['class' => 'btn btn-primary']) !!}
		</div>
		
		
	{!! Form::close() !!}