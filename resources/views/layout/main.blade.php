<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <link rel="stylesheet" href="{{ url('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css') }}">
  <link rel="stylesheet" href="{{ url('assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <div class="wrapper">
      @include('layout.header')
      @include('layout.sidebar')
      <div class="content-wrapper">
        <section class="content mt-5">
          @yield('container')
        </section>
      </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
    <footer class="main-footer">
      <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0-rc
      </div>
    </footer>
  </div>
  <script src="{{ url('assets/plugins/jquery/jquery.min.js') }}"></script>
  <script src="{{ url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ url('assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js') }}"></script>
  <script src="{{ url('assets/dist/js/adminlte.js') }}"></script>
  <script src="{{ url('assets/plugins/jquery-mousewheel/jquery.mousewheel.js') }}"></script>
  <script src="{{ url('assets/plugins/raphael/raphael.min.js') }}"></script>
  <script src="{{ url('assets/plugins/jquery-mapael/jquery.mapael.min.js') }}"></script>
  <script src="{{ url('assets/plugins/jquery-mapael/maps/usa_states.min.js') }}"></script>
  <script src="{{ url('assets/dist/js/demo.js') }}"></script>
  <script>
  function myFunctionD() {
    confirm("Delete Data ?");
    }
  </script>
  @yield('js')
  @yield('modal')
</body>
</html>
