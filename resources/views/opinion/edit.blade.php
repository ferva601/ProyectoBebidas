@extends('plantillas.main')
@section('title', 'Modificar Opinión '.$opinion->id)
@section('content-left')
	
	{{ Html::script('js/opiniones/edit.js') }}
	@include('opinion.formularios.editForm')
	
@endsection