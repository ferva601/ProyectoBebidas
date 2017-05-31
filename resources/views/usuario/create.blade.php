@extends('plantillas.usuario.mainUsuario')
@section('title', 'Crear Usuario')

@section('header-content')
	<h3><b>Agregar Nuevo Usuario</b>
@endsection
@section('content-left')
	
		@include('usuario.formularios.createForm')

@endsection
