@extends('plantillas.main')
@section('title', 'Crear Importador')
@section('content-left')
	{!! Form::open(['route' => 'importador.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		{!! Form::hidden('who', 'I') !!}
		@include('importador.formularios.createForm')
	{!! Form::close() !!}
@endsection