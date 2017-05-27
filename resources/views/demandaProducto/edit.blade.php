@extends('plantillas.main')
@section('title', 'Modificar Demanda de Producto')
@section('content')
	
	{!! Html::script('js/demandaProductos/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('demandaProducto.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection