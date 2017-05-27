@extends('plantillas.main')
@section('title', 'Crear Oferta')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('oferta.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
@endsection