<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Twitter</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('user/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('user/css/adminlte.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('user/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('user/css/main.css') }}">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  @yield('header')
</head>
<body class="hold-transition sidebar-mini layout-fixed" style="background:#e8eaf6; ">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('layout.partials.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('layout.partials.left_sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper"  style="background:#e8eaf6; ">
    <div class="row mr-0 pl-3">
      <!-- Main content -->
      <div class="col-md-8 mt-5 pt-4">
        {{-- @include('layouts.partials.tweet_modal') --}}
        @yield('content')
      </div>

      <!-- /.content -->
      <!-- Right sidebar -->
      @include('layout.partials.right_sidebar')
      <!--/. Right sidebar -->
    </div>
    <!-- /row -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('user/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('user/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('user/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('user/js/adminlte.min.js') }}"></script>
<!-- AdminLTE for demo purposes -->
<script src="{{ asset('user/js/demo.js') }}"></script>
@include('sweetalert::alert')
@yield('footer')
</body>
</html>
