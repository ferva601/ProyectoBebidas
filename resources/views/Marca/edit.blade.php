@extends('plantillas.main')
@section('title', 'Modificar Marca'.$marca->nombre)
@section('content')

	{!! Html::script('js/marcas/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('marca.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection