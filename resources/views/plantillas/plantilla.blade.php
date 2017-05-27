<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
  <title>@yield('title', 'Default') | Dashboard</title>

  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

  {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
  {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
  {!! Html::style('ionicons/css/ionicons.min.css') !!}
  {!! Html::style('archivosLTE/dist/css/AdminLTE.min.css') !!}
  {!! Html::style('archivosLTE/dist/css/skins/_all-skins.min.css') !!}
  {!! Html::style('archivosLTE/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') !!}
</head>
<body>
  
  
  <script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="plugins/fastclick/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>
</body>
</html>