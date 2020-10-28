<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('assets/img/user/tab-icon.png') }}">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- AOS JS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Counter JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>
    <!-- Main CSS File -->
    <link href="{{ asset('css/index.css') }}" type="text/css" rel="stylesheet">

    <title>Culture Indonesia</title>
</head>

<body>

    <!-- Start Navbar Web -->
    <nav id="web" class="navbar main-navbar navbar-expand-lg fixed-top navbar-light" data-aos="fade-down"
        data-aos-duration="1500">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <img src="{{asset('assets/img/user/culture2.png')}}" class="img-fluid" width="60" height="60" alt=""
                    srcset="">
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('/')}}">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ (request()->is('kategori')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('kategori.index')}}">Kategori</a>
                    </li>
                    <li class="nav-item {{ (request()->is('map')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('map.index')}}">Peta</a>
                    </li>
                    <li class="nav-item {{ (request()->is('tentang')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('tentang.index')}}">Tentang</a>
                    </li>
                    <li class="nav-item {{ (request()->is('kontak')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('kontak.index')}}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar Web -->

    <!-- Start Navbar Media -->
    <nav id="media" class="navbar main-navbar navbar-expand-lg navbar-light" data-aos="fade-down"
        data-aos-duration="1500">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <img src="{{asset('assets/img/user/culture2.png')}}" class="img-fluid" width="60" height="60" alt=""
                    srcset="">
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon">
                </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item {{ (request()->is('/')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('/')}}">Beranda <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item {{ (request()->is('kategori')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('kategori.index')}}">Kategori</a>
                    </li>
                    <li class="nav-item {{ (request()->is('map')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('map.index')}}">Peta</a>
                    </li>
                    <li class="nav-item {{ (request()->is('tentang')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('tentang.index')}}">Tentang</a>
                    </li>
                    <li class="nav-item {{ (request()->is('kontak')) ? 'active' : '' }}">
                        <a class="nav-link" href="{{route('kontak.index')}}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- End Navbar Media -->
    <!-- conten -->
    @yield('content')
    <!-- end contem -->
    <!-- End Preview -->

    <hr>

    <!-- Start Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mt-0">
                    <h4></h4>
                    <img src="{{asset('assets/img/user/culture2.png')}}" class="img-fluid" width="150" height="150"
                        alt="" srcset="">
                    <br>
                    <small class="text-muted">
                        Jl. Jenderal Sudirman No. 269 RT 13/RW 09, Desa Sindangrasa, Sindangrasa, Kec. Ciamis, Kabupaten
                        Ciamis, Jawa Barat 46215
                    </small>
                </div>
                <div class="col-md-4">
                    <h4>Hubungi Kami</h4>
                    <ul class="list-unstyled">
                        <li>
                            <table id="company-profile" class="mx-auto">
                                <tr>
                                    <td>
                                        <i class="fa fa-envelope pull-left mr-5"></i>
                                    </td>
                                    <td>
                                        <p>culture@gmail.com</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-phone pull-left mr-5"></i>
                                    </td>
                                    <td>
                                        <p>0898-2831-4928</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <i class="fa fa-map-pin pull-left mr-5"></i>
                                    </td>
                                    <td>
                                        <p>SMK Negeri 1 Ciamis</p>
                                    </td>
                                </tr>
                            </table>
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

    <script>
    $('.counter').counterUp({
        delay: 10,
        time: 2000,
        offset: 70,
        beginAt: 100,
        formatter: function(n) {
            return n.replace(/,/g, '.');
        }
    });
    </script>
    <!-- CDN Jquery -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- Popper JS Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!-- Smooth Scroll -->
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0/dist/smooth-scroll.polyfills.min.js">
    </script>
    <!-- AOS JS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <!-- Main JS File -->
    <script src="{{asset('js/index.js')}}"></script>
</body>

</html>