@extends('plantillas.main')
@section('title', 'Modificar Importador '.$importador->nombre)
@section('content-left')

	{!! Html::script('js/importadores/edit.js') !!}

		@include('importador.formularios.editForm')
	
@endsection