@extends('plantillas.main')
@section('title', 'Crear Distribuidor')
@section('content-left')
	
	{!! Form::open(['route' => 'distribuidor.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}	
		@include('distribuidor.formularios.createForm')
		{!! Form::hidden('who', 'D') !!}
	{!! Form::close() !!}
@endsection