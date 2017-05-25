@extends('plantillas.main')
@section('title', 'Crear Horeca')
@section('content')

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('horeca.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection