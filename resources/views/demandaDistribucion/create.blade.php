@extends('plantillas.main')
@section('title', 'Crear Demanda de Distribución')
@section('content')

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaDistribucion.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection