<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Buahan Admin</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{asset('assets/vendor/fontawesome-free/css/all.min.css')}}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{asset('assets/vendor/overlayScrollbars/css/OverlayScrollbars.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
  <!-- Scripts -->
  {{-- <script src="resources/js/app.js" defer></script> --}}
    <!-- Styles -->
   {{-- <link href="{{asset('assets/css/app.css')}}" rel="stylesheet"> --}}
   <!-- Scripts -->

   <!-- Styles -->
   <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    @include('master.navbar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper mt-5">
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">Dashboard Admin</h1>
        </div>
    </div>
    <section class="content">
        @yield('content')

    </section>

  </div>
  @include('master.footer')
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{asset('assets/js/jquery-3.6.0.min.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- overlayScrollbars -->
<script src="{{asset('assets/vendor/overlayScrollbars/js/jquery.overlayScrollbars.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('dist/js/adminlte.js')}}"></script>

<!-- PAGE PLUGINS -->
{{-- <script src="{{ asset('assets/js/app.js') }}" defer></script> --}}

<!-- jQuery Mapael -->
<script src="{{asset('assets/vendor/jquery-mousewheel/jquery.mousewheel.js')}}"></script>
<script src="{{asset('assets/vendor/raphael/raphael.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-mapael/jquery.mapael.min.js')}}"></script>
<script src="{{asset('assets/vendor/jquery-mapael/maps/usa_states.min.js')}}"></script>
<!-- ChartJS -->
<script src="{{asset('assets/vendor/chart.js/Chart.min.js')}}"></script>

<!-- AdminLTE for demo purposes -->
{{-- <script src="{{asset('dist/js/demo.js')}}"></script> --}}
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
{{-- <script src="{{asset('dist/js/pages/dashboard2.js')}}"></script> --}}
</body>
</html>
