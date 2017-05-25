{!! Form::open(['route' => 'bebida.store', 'method' => 'POST']) !!}
		<div class="form-group">
			{!! Form::label('nombre', 'Nombre del Tipo de Bebida') !!}
			{!! Form::text('nombre', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Tipo de Bebida'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::label('caracteristicas', 'Características') !!}
			{!! Form::textarea('caracteristicas', null, ['class' => 'form-control', 'placeholder' => 'Características'] ) !!}
		</div>

		<div class="form-group">
			{!! Form::submit('Registrar', ['class' => 'btn btn-primary']) !!}
		</div>
		
		
	{!! Form::close() !!}