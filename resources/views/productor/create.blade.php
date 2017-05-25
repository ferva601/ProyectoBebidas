@extends('plantillas.main')
@section('title', 'Crear Productor')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('productor.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection