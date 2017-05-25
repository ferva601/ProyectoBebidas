@extends('plantillas.main')
@section('title', 'Modificar Importador '.$importador->nombre)
@section('content')

	{!! Html::script('js/importadores/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('importador.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection