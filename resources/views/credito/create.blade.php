@extends('plantillas.main')
@section('title', 'Crear Plan de Crédito')
@section('content-left')

	@include('plantillas.alertas.AlertasRequest')	
	@include('credito.formularios.createForm')
	
@endsection