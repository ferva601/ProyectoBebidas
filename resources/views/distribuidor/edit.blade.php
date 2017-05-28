@extends('plantillas.main')
@section('title', 'Modificar Producto '.$distribuidor->nombre)
@section('content-left')

	{!! Html::script('js/distribuidores/edit.js') !!}

	@include('distribuidor.formularios.editForm')
	
@endsection