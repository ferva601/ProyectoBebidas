@extends('plantillas.main')
@section('title', 'Modificar Crédito'. $credito->plan)
@section('content')

	{!! Html::script('js/creditos/edit.js') !!}
	@include('plantillas.alertas.AlertasRequest')	

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('credito.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection