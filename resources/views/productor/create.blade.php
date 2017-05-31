@extends('plantillas.main')
@section('title', 'Crear Productor')
@section('content-left')
	{!! Form::open(['route' => 'productor.store', 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!}
		{!! Form::hidden('who', 'P') !!}
		@include('productor.formularios.createForm')
	{!! Form::close() !!}
@endsection