@extends('plantillas.main')
@section('title', 'Modificar Demanda de Producto')
@section('content-left')
	
	{!! Html::script('js/demandaProductos/edit.js') !!}

	@include('demandaProducto.formularios.editForm')
	
@endsection