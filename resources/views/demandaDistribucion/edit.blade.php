@extends('plantillas.main')
@section('title', 'Modificar Demanda de Distribución')
@section('content-left')
	
	{!! Html::script('js/demandaDistribuidores/edit.js') !!}
	@include('demandaDistribucion.formularios.editForm')
	
@endsection