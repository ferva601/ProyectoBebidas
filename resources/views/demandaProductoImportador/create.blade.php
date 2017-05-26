@extends('plantillas.main')
@section('title', 'Crear Demanda de Producto')
@section('content')

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaProductoImportador.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection