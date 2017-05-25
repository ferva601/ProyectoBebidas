@extends('plantillas.main')
@section('title', 'Modificar Crédito'. $credito->plan)
@section('content')

<<<<<<< HEAD
	{!! Html::script('js/creditos/edit.js') !!}
	@include('plantillas.alertas.AlertasRequest')	
=======
>>>>>>> 480a7bbce31a0aa15df85493177ad346ffc477df
	<div class="col-md-4"></div>
	<div class="col-md-4">
		@include('credito.formularios.editForm')
	</div>
	<div class="col-md-4"></div>
	
@endsection