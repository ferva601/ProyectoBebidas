@extends('plantillas.usuarios.mainUsuario')
@section('title', 'Modificar Usuario'.$usuario->nombre)
@section('content-left')

	{!! Html::script('js/usuarios/edit.js') !!}

		@include('usuario.formularios.editForm')

@endsection