<!DOCTYPE html>
<html lang="es">
   <head>
   <meta charset="UTF-8">
      <title>@yield('title', 'TooDrinks') | Dashboard</title>

      <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

      {!! Html::style('bootstrap/css/bootstrap.min.css') !!}
      {!! Html::style('font-awesome/css/font-awesome.min.css') !!}
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
      <span class="logo-mini"><b>A</b>LT</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b>LTE</span>
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

      
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
     
      
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
        
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      <section class="content-header">
      
      </section>

    <!-- Main content -->
      <section class="content">
      <!-- Small boxes (Stat box) -->
      
         <!-- /.row -->
         <!-- Main row -->
         <div class="row">
           <!-- Left col -->
           <section class="col-lg-7 connectedSortable">
               <table>  
                  <thead>
                     
                  
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
                  <th> PRUEBA</th>
               </thead>
               </table>
           </section>
           <!-- /.Left col -->
           <!-- right col (We are only adding the ID to make the widgets sortable)-->
           <section class="col-lg-5 connectedSortable">


           </section>
           <!-- right col -->
         </div>
         <!-- /.row (main row) -->

      </section>
    <!-- /.content -->
    </div>

  <!-- /.content-wrapper -->
   <footer class="main-footer">
      <div class="pull-right hidden-xs">
         <b>Version</b> 2.3.8
       </div>
       <strong>Copyright &copy; 2014-2016 <a href="http://almsaeedstudio.com">Almsaeed Studio</a>.</strong> All rights
       reserved.
   </footer>


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