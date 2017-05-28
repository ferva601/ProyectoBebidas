@extends('plantillas.main')
@section('title', 'Modificar Crédito'. $credito->plan)
@section('content-left')

	{!! Html::script('js/creditos/edit.js') !!}
	@include('plantillas.alertas.AlertasRequest')	
	@include('credito.formularios.editForm')
	
@endsection