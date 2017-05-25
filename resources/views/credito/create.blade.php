@extends('plantillas.main')
@section('title', 'Crear Plan de Crédito')
@section('content')

@include('plantillas.alertas.AlertasRequest')	
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('credito.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection