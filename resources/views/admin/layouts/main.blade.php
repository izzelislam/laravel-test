<!DOCTYPE html>
<html>
<head>
    @include('admin.layouts.part.head')
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

 @include('admin.layouts.part.header')

  <!-- =============================================== -->

  <!-- Left side column. contains the sidebar -->
@include('admin.layouts.part.sidebar')

  <!-- =============================================== -->

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
  @yield('content')
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 2.4.18
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->

</div>
<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src='{{asset("AdminLTE-2.4.18/bower_components/jquery/dist/jquery.min.js")}}'></script>
<!-- Bootstrap 3.3.7 -->
<script src='{{asset("AdminLTE-2.4.18/bower_components/bootstrap/dist/js/bootstrap.min.js")}}'></script>
<!-- SlimScroll -->
<script src='{{asset("AdminLTE-2.4.18/bower_components/jquery-slimscroll/jquery.slimscroll.min.js")}}'></script>
<!-- FastClick -->
<script src='{{asset("AdminLTE-2.4.18/bower_components/fastclick/lib/fastclick.js")}}'></script>
<!-- AdminLTE App -->
<script src='{{asset("AdminLTE-2.4.18/dist/js/adminlte.min.js")}}'></script>
<!-- AdminLTE for demo purposes -->
<script src='{{asset("AdminLTE-2.4.18/dist/js/demo.js")}}'></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree()
  })
</script>
<script src='{{asset("AdminLTE-2.4.18/bower_components/ckeditor/ckeditor.js")}}'></script>
<!-- Bootstrap WYSIHTML5 -->
<script src='{{asset("AdminLTE-2.4.18/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js")}}'></script>
<script>                   
  $(function () {
    // Replace the <textarea id="editor1"> with a CKEditor
    // instance, using default configuration.
    CKEDITOR.replace('editor1')
    //bootstrap WYSIHTML5 - text editor
    $('.textarea').wysihtml5()
  })
</script>
</body>
</html>
