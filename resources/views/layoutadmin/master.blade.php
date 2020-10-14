<html lang="en">
  <head>
    <meta charset="utf-8">
    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap core CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->
    <!-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Datatables -->
   <link href="{{ asset('assets/vendor/datatables/datatables.min.css') }}" rel="stylesheet">

   <!-- Font Awesome -->
   <link href="{{ asset('assets/vendor/fontawesome-free/css/all.css') }}" rel="stylesheet">

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <link href="{{ asset('assets/css/ie10-viewport-bug-workaround.css') }}" rel="stylesheet">

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap4.min.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous"> -->


    <!-- Datatables -->
    <!-- <link href="{{ asset('assets/vendor/datatables/datatables.min.css') }}" rel="stylesheet"> -->

    <!-- Font Awesome JS -->
    <!-- <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script> -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <!-- Font Awesome -->
    <!-- <link href="{{ asset('assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"> -->
    <!-- Custom styles for laravel -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    @stack('styles')

  </head>

  <body>

    @include('layoutadmin._modal')
    <!-- <nav class="navbar navbar-dark bg-primary">
      <a class="navbar-brand ml-3">Navbar</a>
    </nav> -->
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
                  <a href="icon"><i class="fas fa-table"></i> Icon</a>
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
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fas fa-2x fa-user"></span></a>
                      <ul class="dropdown-menu">
                        <li><a href="#" style="background: white;" class="text-center">Setting</a></li>
                        <li><a href="#" class="btn btn-sm btn-primary" style="width:100%;">Keluar</a></li>
                      </ul>
                    </li>
                  </ul>
                  <!-- <div class="">
                    <p>Dashboard</p>
                  </div> -->
              </div>
          </nav>



    @yield('content')



    <!-- Bootstrap core JavaScript
   ================================================== -->
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
   <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>

   <!-- Datatables -->
   <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script>

   <!-- Sweetalert2 -->
   <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>

   <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
   <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script>


    <!-- Bootstrap core JavaScript -->
    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <!-- <script src="http://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script> -->
    <!-- Popper.JS -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script> -->
    <!-- Bootstrap JS -->
    <!-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->
    <!-- <script src="https://cdn.datatables.net/1.10.22/js/dataTables.bootstrap4.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script> -->

    <!-- <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script> -->

    <!-- Datatables -->
    <!-- <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script> -->
    <!-- <script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script> -->

    <!-- <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.js') }}"></script> -->


    <!-- Datatables -->
    <!-- <script src="{{ asset('assets/vendor/datatables/datatables.min.js') }}"></script> -->

    <!-- Sweetalert2 -->
    <!-- <script src="{{ asset('assets/vendor/sweetalert2/sweetalert2.all.min.js') }}"></script> -->

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <!-- <script src="{{ asset('assets/js/ie10-viewport-bug-workaround.js') }}"></script> -->
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
