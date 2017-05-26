@extends('plantillas.main')
@section('title', 'Modificar Demanda de Distribución')
@section('content')
	
	{!! Html::script('js/demandaDistribuidores/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaDistribucion.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection