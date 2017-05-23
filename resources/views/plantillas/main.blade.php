<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Default') | Panel de Administración</title>

	{!! Html::style('bootstrap/css/bootstrap.css') !!}
	{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
	{!! Html::style('font-awesome/css/font-awesome.min.css') !!}
	{!! Html::style('font-awesome/css/font-awesome.css') !!}
	{!! Html::script('bootstrap/js/jquery-3.2.1.min.js') !!}
</head>

<body>
	@include('admin.template.partes.nav')
	<section>
		@yield('content')
	</section>

	<footer>
		@include('admin.template.partes.footer')
	</footer>

	
	{!! Html::script('bootstrap/js/bootstrap.js') !!}
	{!! Html::script('js/usuarios.js') !!}
	
</body>
</html>