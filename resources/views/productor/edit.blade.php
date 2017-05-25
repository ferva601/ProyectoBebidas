@extends('plantillas.main')
@section('title', 'Modificar Producto '.$productor->nombre)
@section('content')

	{!! Html::script('js/productores/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('productor.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection