<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<title>TooDrinks | @yield('title', '') </title>

		{!! Html::style('bootstrap/css/bootstrap.css') !!}
		{!! Html::style('bootstrap/css/bootstrap.min.css') !!}
		{!! Html::style('font-awesome/css/font-awesome.min.css') !!}
		{!! Html::style('font-awesome/css/font-awesome.css') !!}
		{!! Html::script('bootstrap/js/jquery-3.2.1.min.js') !!}
		{!! Html::style('ionicons/css/ionicons.min.css') !!}
	    {!! Html::style('archivosLTE/dist/css/AdminLTE.min.css') !!}
	    {!! Html::style('archivosLTE/dist/css/skins/_all-skins.min.css') !!}
	    {!! Html::style('archivosLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
	</head>

	<body class="hold-transition skin-blue sidebar-mini">
		<div class="wrapper">
			<header class="main-header">
			    <!-- Logo -->
			    <a href="index2.html" class="logo">
			      <!-- mini logo for sidebar mini 50x50 pixels -->
			      <span class="logo-mini"><b>T</b>D</span>
			      <!-- logo for regular state and mobile devices -->
			      <span class="logo-lg"><b>Too</b>Drinks</span>
			    </a>
			    <!-- NAVBAR SUPERIOR -->
			    @include('plantillas/partes/navbar')
			    <!-- /.NAVBAR SUPERIOR -->    
		  	</header>

  			<aside class="main-sidebar">
			    <!-- SIDEBAR -->
			    <section class="sidebar">
			    	@include('plantillas/partes/sidebar')
			    </section>
		    	<!-- /.SIDEBAR -->
		  	</aside>

   			<div class="content-wrapper">
		    	<!-- CABECERA DEL CONTENIDO -->
		        <section class="content-header">
		      		@yield('header-content')
		        </section>
		        <!-- /.CABECERA DEL CONTENIDO -->

    			<!-- SECCIÓN PRINCIPAL -->
      			<section class="content">
         			<div class="row">
			           <!-- COLUMNA DE LA IZQUIERDA -->
			           <section class="col-lg-8 connectedSortable">
			               @yield('content-left')
			           </section>
			           <!-- /.COLUMNA DE LA IZQUIERDA -->

			           <!-- COLUMNA DE LA DERECHA-->
			           <section class="col-lg-4 connectedSortable">
							@include('plantillas/partes/content-right')
			           </section>
			           <!-- /.COLUMNA DE LA DERECHA -->
         			</div>
      			</section>
    			<!-- /.SECCIÓN PRINCIPAL -->
    		</div>

  			<!-- FOOTER -->
   			<footer class="main-footer">
      			<div class="pull-right hidden-xs">
		        	<b>Version</b> 2.3.8
		       	</div>
		       	<strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
		       reserved.
		    </footer>
		    <!-- /.FOOTER -->
		</div>
     
	    {!! Html::script('bootstrap/js/jquery-3.2.1.min.js') !!}
	    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}}
	    {!! Html::script('bootstrap/js/jquery-ui.min.js') !!}
	    {!! Html::script('archivosLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') !!}
	    {!! Html::script('archivosLTE/plugins/slimScroll/jquery.slimscroll.min.js') !!}
	    {!! Html::script('archivosLTE/plugins/fastclick/fastclick.js') !!}
	    {!! Html::script('archivosLTE/dist/js/app.min.js') !!}

      	<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
     	<script>
        	$.widget.bridge('uibutton', $.ui.button);
      	</script>
   	</body>
</html>