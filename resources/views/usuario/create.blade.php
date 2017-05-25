@extends('plantillas.main')
@section('title', 'Crear Usuario')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('usuario.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection
