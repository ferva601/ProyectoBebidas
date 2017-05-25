@extends('plantillas.main')
@section('title', 'Modificar Producto'.$producto->nombre)
@section('content')

	{!! Html::script('js/productos/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('producto.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection