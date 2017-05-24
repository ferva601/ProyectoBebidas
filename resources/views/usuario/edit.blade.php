@extends('plantillas.main')
@section('title', 'Modificar Usuario'.$usuario->nombre)
@section('content')

	{!! Html::script('js/usuarios/edit.js') !!}

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('usuario.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection