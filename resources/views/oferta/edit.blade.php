@extends('plantillas.main')
@section('title', 'Modificar Oferta'. $oferta->titulo)
@section('content')

	{!! Html::script('js/ofertas/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('oferta.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection