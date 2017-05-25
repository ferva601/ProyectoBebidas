@extends('plantillas.main')
@section('title', 'Modificar Usuario'.$horeca->nombre)
@section('content')

	{!! Html::script('js/horecas/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('horeca.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection