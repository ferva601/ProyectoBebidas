@extends('plantillas.main')
@section('title', 'Crear Producto')
@section('content')
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('producto.formularios.createForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection