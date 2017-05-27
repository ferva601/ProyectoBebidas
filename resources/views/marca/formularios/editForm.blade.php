{!! Form::open(['route' => ['marca.update', $marca->id], 'method' => 'PUT']) !!}

	{!! Form::hidden('reclamada_hidden', $marca->reclamada, ['id' => 'reclamada_hidden']) !!}
	{!! Form::hidden('pais_hidden', $marca->pais_id, ['id' => 'pais_hidden']) !!}
	{!! Form::hidden('provincia_hidden', $marca->provincia_region_id, ['id' => 'provincia_hidden']) !!}
	{!! Form::hidden('productor_hidden', $marca->productor_id, ['id' => 'productor_hidden']) !!}

	{!! Form::hidden ('creador_id','3') !!}
	{!! Form::hidden ('tipo_creador','Productor') !!}

	<div class="form-group">
		{!! Form::label ('nombre','Nombre') !!}
		{!! Form::text ('nombre', $marca->nombre,['class' => 'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('nombre_seo','Nombre Seo') !!}
		{!! Form::text ('nombre_seo',$marca->nombre_seo,['class'=>'form-control']) !!}
	</div>
	
	<div class="form-group">
		{!! Form::label ('descripcion','Descripcion') !!}
		{!! Form::text ('descripcion',$marca->descripcion,['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		{!! Form::label ('logo','Logo') !!}
		{!! Form::file ('logo',['class'=>'form-control']) !!}
	</div>

	<div class="form-group">
		<select name="reclamada" id="reclamada" class="form-control">
			<option value="0">No</option>
			<option value="1">Si</option>
		</select>
	</div>

	<div class="form-group">
		{!! Form::label ('pais_id','País') !!}
		<select name="pais_id" id="pais_id" class="form-control">
			@foreach($paises as $pais)
				<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		{!! Form::label ('provincia_region_id','Provincia / Región') !!}
		<select name="provincia_region_id" id="provincia_id" class="form-control">
			@foreach($provincias as $provincia)
				<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
			@endforeach
		</select>
	</div>
	
	<div class="form-group">
		{!! Form::label ('productor_id','Productor') !!}
		<select name="productor_id" id="productor_id" class="form-control">
			@foreach($productores as $productor)
				<option value="{{ $productor->id }}">{{ $productor->nombre }}</option>
			@endforeach
		</select>
	</div>

	{!! Form::submit ('Modificar Marca',['class'=>'btn btn-primary']) !!}

{!! Form::close() !!}