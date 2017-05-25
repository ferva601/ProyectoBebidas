@extends('plantillas.main')
@section('title', 'Modificar Tipo de Bebida'. $bebida->nombre)
@section('content')

	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('bebida.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection