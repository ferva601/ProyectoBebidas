@extends('plantillas.main')
@section('title', 'Modificar Marca'.$marca->nombre)
@section('content-left')

	{!! Html::script('js/marcas/edit.js') !!}

	
		@include('marca.formularios.editForm')

	
@endsection