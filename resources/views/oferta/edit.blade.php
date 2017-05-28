@extends('plantillas.main')
@section('title', 'Modificar Oferta'. $oferta->titulo)
@section('content-left')

	{!! Html::script('js/ofertas/edit.js') !!}

		@include('oferta.formularios.editForm')

	
@endsection