@extends('plantillas.main')
@section('title', 'Crear Horeca')
@section('content-left')
	
	{!! Form::open(['route' => 'horeca.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		{!! Form::hidden('who', 'H') !!}
		@include('horeca.formularios.createForm')
	{!! Form::close() !!}

	
@endsection