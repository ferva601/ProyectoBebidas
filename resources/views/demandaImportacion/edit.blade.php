@extends('plantillas.main')
@section('title', 'Modificar Demanda de Importación')
@section('content')
	
	{!! Html::script('js/demandaImportadores/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaImportacion.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection