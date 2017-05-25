@extends('plantillas.main')
@section('title', 'Crear Distribuidor')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('distribuidor.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection