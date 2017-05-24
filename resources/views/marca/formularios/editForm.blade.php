{!! Form::open(['route' => ['marca.update', $marca->id], 'method' => 'PUT']) !!}

{!! Form::label ('nombre','Nombre') !!}
{!! Form::text ('nombre',$marca->nombre,['class'=>'form-control','placeholder'=>'Ej. Polar', 'required']) !!}

{!! Form::label ('nombre_seo','Nombre Seo') !!}
{!! Form::text ('nombre_seo',$marca->nombre_seo,['class'=>'form-control','placeholder'=>'Ej. Polar Seo', 'required']) !!}

{!! Form::label ('descripcion','Descripcion') !!}
{!! Form::text ('descripcion',$marca->descripcion,['class'=>'form-control','placeholder'=>'Ej. ', 'required']) !!}

{!! Form::label ('logo','Logo') !!}
{!! Form::file ('logo',null,['class'=>'form-control','required']) !!}

{!! Form::label ('reclamada','Reclamada') !!}
{!! Form::select ('reclamada',['Si'=>'Si','No'=>'No']) !!}
<div>
Pais
<select name="pais_id" id="">
	@foreach($paises as $pais)
	<option value="{{ $pais->id }}">{{ $pais->pais }}</option>
	@endforeach
</select>
</div>
<div>
Provincia
<select name="provincia_region_id" id="">
	@foreach($provincias as $provincia)
	<option value="{{ $provincia->id }}">{{ $provincia->provincia }}</option>
	@endforeach
</select>
</div>

Productor
<select name="productor_id" id="">
	@foreach($productores as $productor)
	<option value="{{ $productor->id }}">{{ $productor->nombre }}</option>
	@endforeach
</select>
</div>

{!! Form::hidden ('creador_id','3') !!}
{!! Form::hidden ('tipo_creador','Productor') !!}

{!! Form::submit ('Modificar',['class'=>'btn btn.primary']) !!}

{!! Form::close() !!}