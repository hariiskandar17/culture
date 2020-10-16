<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- AOS JS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Main CSS File -->
    <link href="{{ asset('css/index.css') }}" rel="stylesheet">

    <title>Culture Indonesia</title>
</head>
<body>
        <!-- Start Navbar -->
        <nav class="navbar main-navbar navbar-expand-lg fixed-top navbar-light" data-aos="fade-down" data-aos-duration="1500">
            <div class="container">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon">
                    </span>
                </button>
                <span class="navbar-brand mb-0 h1">Culture</span>
                <div class="collapse navbar-collapse" id="navbarNav">

                    <ul class="navbar-nav mr-auto">
                      @guest

                      <li class="nav-item active">
                          <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Kebudayaan</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Situs Sejarah</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="kontak">Kontak</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about">Tentang</a>
                      </li>


                      @if (Route::has('register'))
                      <ul class="navbar-nav">
                          <a href="{{route('login')}}" class="btn section-btn-right btn-default btn-sm">
                              Masuk
                          </a>
                      </ul>
                      @endif
                      @else
                      <li class="nav-item active">
                          <a class="nav-link" href="">Home <span class="sr-only">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Kebudayaan</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">Situs Sejarah</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="kontak">Kontak</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="about">Tentang</a>
                      </li>
                  </ul>
                  <ul class="navbar-nav ml-auto">
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              <i class="fa fa-user-circle"></i> {{ Auth::user()->name }}
                          </a>
                          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink1">
                              <a class="dropdown-item" href="profile.html">Profil</a>
                              <a class="dropdown-item" href="#">Another action</a>
                              <div class="dropdown-divider"></div>
                              <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                               document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                               @csrf
                           </form>
                          </div>
                      </li>
                  </ul>
                      @endguest

                </div>
            </div>
        </nav>
        <!-- End Navbar -->

        <!-- conten -->
        @yield('content')
        <!-- end contem -->

    <hr>

    <!-- Start Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4></h4>
                        <img src="{{ asset('assets/img/user/culture2.png') }}" class="img-fluid" width="200" height="200" alt="" srcset="">
                    </div>
                    <div class="col-md-4">
                        <h4>Hubungi Kami</h4>
                        <ul class="list-unstyled mx-auto">
                            <li>
                                <dl class="row">
                                    <dt class="col-sm-3">
                                        <i class="fa fa-envelope pull-left mt-1 mr-3"></i>
                                    </dt>
                                    <dd class="col-sm-9">
                                        culture@gmail.com
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="row">
                                    <dt class="col-sm-3">
                                    <i class="fa fa-phone pull-left mt-1 mr-4"></i>
                                    </dt>
                                    <dd class="col-sm-9">
                                        0898-2831-4928
                                    </dd>
                                </dl>
                            </li>
                            <li>
                                <dl class="row">
                                    <dt class="col-sm-3">
                                    <i class="fa fa-map-pin pull-left mt-1 mr-4"></i>
                                    </dt>
                                    <dd class="col-sm-9">
                                        SMK Negeri 1 Ciamis
                                    </dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-4 text-center">
                        <h4>Ikuti Kami</h4>
                        <div class="social-footer">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google"></i></a>
                            <a href="#"><i class="fa fa-youtube"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                        </div>
                        <small class="text-center text-muted">
                            Copyright - 2020
                        </small>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End Footer -->

<!-- JQuery Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<!-- Popper JS Bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<!-- Bootstrap JS -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<!-- Smooth Scroll -->
<script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js">
</script>
<!-- AOS JS -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<!-- Main JS File -->
<script src="{{ asset('js/index.js') }}"></script>
<script>
$(document).ready(function () {
  $('#summernote').summernote({
    toolbar: [
      ['style', ['style']],
      ['font', ['bold', 'underline', 'clear']],
      ['fontname', ['fontname']],
      ['color', ['color']],
      ['para', ['ul', 'ol', 'paragraph']],
      ['table', ['table']],
      ['insert', ['link', 'picture']]
    ]
  });
  $('.js-example-basic-single').select2();
});

</script>
</body>

</html>
