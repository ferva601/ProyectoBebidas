@extends('plantillas.main')
@section('title', 'Crear Tipo de Bebida')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('bebida.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection