@extends('plantillas.main')
@section('title', 'Modificar Producto '.$productor->nombre)
@section('content-left')

	{!! Html::script('js/productores/edit.js') !!}

	
		@include('productor.formularios.editForm')

	
@endsection