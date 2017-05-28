@extends('plantillas.main')
@section('title', 'Modificar Producto'.$producto->nombre)
@section('content-left')

	{!! Html::script('js/productos/edit.js') !!}


		@include('producto.formularios.editForm')

	
@endsection