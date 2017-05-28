@extends('plantillas.main')
@section('title', 'Modificar Tipo de Bebida'. $bebida->nombre)
@section('content-left')
	@include('bebida.formularios.editForm')
@endsection