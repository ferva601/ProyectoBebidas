@extends('plantillas.main')
@section('title', 'Modificar Suscripción '.$suscripcion->suscripcion)
@section('content-left')
	@include('suscripcion.formularios.editForm')
@endsection