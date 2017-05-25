@extends('plantillas.main')
@section('title', 'Crear Plan de Crédito')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('credito.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection