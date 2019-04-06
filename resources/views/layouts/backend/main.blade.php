<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title','MyBlog')</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="/backend/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="/backend/plugins/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="/backend/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="/backend/css/skins/_all-skins.min.css">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="/backend/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
  <!-- simplemdemde css -->
  <link rel="stylesheet" href="/backend/css/simplemde.min.css">
  <!-- custom css -->
  <link rel="stylesheet" href="/backend/css/custom.css">
  <!-- datetimepicker css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css">
  <!-- jasny css -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/css/jasny-bootstrap.min.css">
  

  <!-- jQuery 2.2.3 -->
  <script src="/backend/js/jquery-2.2.3.min.js"></script>
  <!-- Bootstrap 3.3.6 -->
  <script src="/backend/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="/backend/js/app.min.js"></script>
  <!-- simplemdemde js -->
  <script src="/backend/js/simplemde.min.js"></script> 
  <!-- moment js-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <!-- datetimepicker js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
  <!-- jasny js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/4.0.0/js/jasny-bootstrap.min.js"></script>

   
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  @include('layouts.backend.navbar');

  <!-- Left side column. contains the logo and sidebar -->
  @include('layouts.backend.sidebar');  

  <!-- Content Wrapper. Contains page content -->
  @yield('content')
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      
    </div>
    <strong>Copyright &copy; {{ date('Y') }} fox.</strong> All rights
    reserved.
  </footer>

</div>
<!-- ./wrapper -->
@yield('script')

</body>
</html>
