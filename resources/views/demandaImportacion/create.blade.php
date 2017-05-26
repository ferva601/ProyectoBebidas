@extends('plantillas.main')
@section('title', 'Crear Demanda de Importador')
@section('content')

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaImportacion.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection