{!! Form::open(['route'=>'marca.store','method'=>'POST']) !!}
	
	{!! Form::hidden ('creador_id','1') !!}
	{!! Form::hidden ('tipo_creador','P') !!}

	<div class="form-group">
		{!! Form::label ('nombre','Nombre') !!}
		{!! Form::text ('nombre',null,['class'=>'form-control','placeholder'=>'Ej. Polar', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('nombre_seo','Nombre Seo') !!}
		{!! Form::text ('nombre_seo',null,['class'=>'form-control','placeholder'=>'Ej. Polar Seo', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('descripcion','Descripcion') !!}
		{!! Form::text ('descripcion',null,['class'=>'form-control','placeholder'=>'Ej. ', 'required']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('logo', 'Logo') !!}
		{!! Form::file ('logo', ['class'=>'form-control','required']) !!}
	</div>

	<div class="form-group">
		<select name="reclamada" class="form-control">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>	
	</div>
	
	<div class="form-group">
		{!! Form::label ('pais_id','País') !!}
		<select name="pais_id" class="form-control">
			@foreach($paises as $pais)
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label ('provincia_region_id','Provincia / Región') !!}
		<select name="provincia_region_id" class="form-control">
			@foreach($provincias as $provincia)
				<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
			@endforeach
		</select>
	</div>
	
	<div class="form-group">
		{!! Form::label ('productor_id','Productor') !!}
		<select name="productor_id" class="form-control">
			@foreach($productores as $productor)
				<option value="{{ $productor->id }}">{{ $productor->nombre }}</option>
			@endforeach
		</select>
	</div>

	{!! Form::submit ('Agregar',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}