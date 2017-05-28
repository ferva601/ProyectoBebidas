@extends('plantillas.main')
@section('title', 'Modificar Demanda de Importación')
@section('content-left')
	
	{!! Html::script('js/demandaImportadores/edit.js') !!}
	@include('demandaImportacion.formularios.editForm')
	
@endsection