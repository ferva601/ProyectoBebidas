@extends('plantillas.main')
@section('title', 'Modificar Producto '.$distribuidor->nombre)
@section('content')

	{!! Html::script('js/distribuidores/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('distribuidor.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection