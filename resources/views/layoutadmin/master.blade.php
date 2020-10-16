<html lang="en">
  <head>
    <meta charset="utf-8">
    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap core CSS -->

    <!-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


    {{-- Leaflet --}}
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
        integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
        crossorigin="" />
    <link rel="stylesheet" type="text/css"
        href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
    <link rel="stylesheet" type="text/css"
        href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />

    {{-- Select 2 --}}
    <!-- <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-beta.1/dist/js/select2.min.js"></script> -->

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">

    <!-- include summernote css -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">


    <!-- Datatables -->
   <link href="{{ asset('assets/vendor/datatables/datatables.min.css') }}" rel="stylesheet">

   <!-- Font Awesome -->
   <link href="{{ asset('assets/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet">

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">


    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Custom styles for laravel -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('styles')

  </head>

  <body>

    @include('layoutadmin._modal')
    <!-- Fixed navbar -->
    <div class="wrapper nav-net">
      <!-- Sidebar Holder -->
      <nav id="sidebar" class="bg-primary">
          <div class="sidebar-header">
              <h1 class="text-center">Admin</h1>
          </div>

          <ul class="list-unstyled components mr-2">
              <li class="active">
                  <a href="dashboard"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
              </li>
              <li>
                  <a href="icon"><i class="fas fa-table"></i> Kategori</a>
              </li>
              <li>
                  <a href="/artikel"><i class="fas fa-file-image"></i> Artikel</a>
              </li>
              <li>
                  <a href="/lokasi"><i class="fas fa-map-marker-alt"></i> Lokasi</a>
              </li>
              <li>
                  <a href="/user"><i class="fas fa-address-card"></i> User</a>
              </li>
          </ul>
      </nav>

      <!-- Page Content Holder -->
      <div id="content">

          <nav class="navbar navbar-expand-lg navbar-light bg-light">
              <div class="container-fluid">
                  <button type="button" id="sidebarCollapse" class="navbar-btn">
                      <span></span>
                      <span></span>
                      <span></span>
                  </button>
                  <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle"></i> {{ Auth::user()->name }}</a>
                      <ul class="dropdown-menu">
                        <li><a href="#" style="background: white;" class="text-center">Setting</a></li>
                        <li><a  href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();" class="btn btn-sm btn-primary" style="width:100%;">Keluar</a></li>
                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                         @csrf
                     </form>
                      </ul>
                    </li>
                  </ul>
                  <!-- <div class="">
                    <p>Dashboard</p>
                  </div> -->
              </div>
          </nav>



    @yield('content')



    <!-- include summernote js -->
    <!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script> -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

   <!-- Datatables -->
   <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>

   <!-- Sweetalert2 -->
   <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>

   <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.2/summernote.js"></script>


    {{-- script --}}
    <script src="{{ asset('js/script.js') }}"></script>
      {{-- sidebar --}}
    <script type="text/javascript">
      $(document).ready(function () {
          $('#sidebarCollapse').on('click', function () {
              $('#sidebar').toggleClass('active');
              $(this).toggleClass('active');
          });

      });
  </script>

    @stack('scripts')
  </body>
</html>
