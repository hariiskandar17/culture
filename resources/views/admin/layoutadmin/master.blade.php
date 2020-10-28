<html lang="en">

<head>
    <meta charset="utf-8">
    {{-- CSRF TOKEN --}}
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="icon" href="{{ asset('assets/img/favicon.ico') }}">

    <!-- Bootstrap core CSS -->

    <!-- <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet"> -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
        integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">


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
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js"
        integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous">
    </script>
    <!-- Custom styles for laravel -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    @stack('styles')

    <style media="screen">
    #mapid {
        height: 400px;
        margin-bottom: 10px;
    }
    </style>

</head>

<body>
    @include('admin.layoutadmin._modal')
    <!-- Fixed navbar -->
    <div class="wrapper nav-net">
        <!-- Sidebar Holder -->
        <nav id="sidebar" class="bg-primary">
            <div class="sidebar-header text-center" style="margin-top:10px;">
                <img src="{{asset('assets/img/admin.png')}}" width="70px" alt="" class="img-circle">
                <a href="profileadmin">
                    <h3 class="text-center">{{ Auth::user()->name }}</h3>
                </a>
            </div>

            <ul class="list-unstyled components mr-2" style="margin-top:-30px; !impotan">
                <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
                    <a href="{{ route('admin.index') }}"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                </li>
                <li class="{{ Request::is('icon') ? 'active' : '' }}">
                    <a href="{{ route('icon.index') }}"><i class="fas fa-table"></i> Icons</a>
                </li>
                <li class="{{ Request::is('lokasi') ? 'active' : '' }}">
                    <a href="{{ route('lokasi.index') }}"><i class="fas fa-map-marker-alt"></i> Lokasi</a>
                </li>
                <li class="{{ Request::is('user') ? 'active' : '' }}">
                    <a href="{{ route('user.index') }}"><i class="fas fa-address-card"></i> User</a>
                </li>
            </ul>
            <ul class="list-unstyled CTAs">
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="download">Keluar</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav>

        <!-- Page Content Holder -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" id="sidebarCollapse" class="navbar-btn">
                            <span></span>
                            <span></span>
                            <span></span>
                        </button>
                    </div>

                </div><!-- /.container-fluid -->
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

            {{-- Leaftlet JS --}}
            <script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
                integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
                crossorigin=""></script>
            <script type='text/javascript'
                src='https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js'>
            </script>
            <!-- Load Esri Leaflet from CDN -->
            <script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js"
                integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ=="
                crossorigin=""></script>
            <!-- Leaflet.FeatureGroup.SubGroup assets -->
            <script src="https://unpkg.com/leaflet.featuregroup.subgroup@1.0.2/dist/leaflet.featuregroup.subgroup.js">
            </script>



            {{-- script --}}
            <script src="{{ asset('js/script.js') }}"></script>
            {{-- sidebar --}}
            <script type="text/javascript">
            $(document).ready(function() {
                $('#sidebarCollapse').on('click', function() {
                    $('#sidebar').toggleClass('active');
                    $(this).toggleClass('active');
                });

            });

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $('#formSave').submit(function(e) {
                e.preventDefault();
                var request = new FormData(this);

                $('#formSave').removeClass('hide')

                $.ajax({
                    url: "{{ route('lokasi.store') }}",
                    method: "POST",
                    data: request,
                    contentType: false,
                    cache: false,
                    processData: false,
                    success: function(data) {
                        if (data == "sukses") {
                            $('#closeModalTambah').click();
                            $('#formSave')[0].reset();
                            swal({
                                type: 'success',
                                title: 'Berhasil!',
                                text: 'Data Telah Tersimpan!'
                            });
                            loadDataTable();
                        }
                    }
                });
            });
            </script>

            <script>
            $(document).ready(function() {

                var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
                        maxZoom: 20,
                        subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
                    }),
                    latlng = L.latLng(-2.039833, 123.8244163);

                var map = L.map('mapid', {
                    center: latlng,
                    zoom: 4,
                    layers: [tiles]
                });
                var popup = L.popup();

                function onMapClick(e) {
                    popup
                        .setLatLng(e.latlng)
                        .setContent("Latitude dan Longitude " + e.latlng.toString())
                        .openOn(map);
                    $('#latitude').val(e.latlng.lat);
                    $('#longitude').val(e.latlng.lng);
                    console.log(e);
                }
                map.on('click', onMapClick);
                fetch('https://x.rajaapi.com/poe')
                    .then(r => r.json())
                    .then(r => {
                        $.ajax({
                            url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/provinsi`,
                            type: 'get',
                            dataType: 'json',
                            success: (re => {
                                let tes = re.data;
                                for (const i in tes) {
                                    $('#provinsi').append(`
                    <option value="${tes[i].id}">${tes[i].name}</option>
                    `)
                                }
                            })
                        })
                    })


                $('#provinsi').on('change', function() {
                    const id = $(this).val();
                    fetch('https://x.rajaapi.com/poe')
                        .then(r => r.json())
                        .then(r => {
                            $.ajax({
                                url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/kabupaten?idpropinsi=${id}`,
                                type: 'get',
                                dataType: 'json',
                                success: (re => {
                                    let tes = re.data;
                                    for (const i in tes) {
                                        $('#kabupaten').append(`
                        <option value="${tes[i].id}">${tes[i].name}</option>
                        `)
                                    }
                                })
                            })
                        })
                })

                $('#kabupaten').on('change', function() {
                    const id = $(this).val();
                    fetch('https://x.rajaapi.com/poe')
                        .then(r => r.json())
                        .then(r => {
                            $.ajax({
                                url: `https://x.rajaapi.com/MeP7c5ne${r.token}/m/wilayah/kecamatan?idkabupaten=${id}`,
                                type: 'get',
                                dataType: 'json',
                                success: (re => {
                                    let tes = re.data;
                                    for (const i in tes) {
                                        $('#kecamatan').append(`
                    <option value="${tes[i].id}">${tes[i].name}</option>
                    `)
                                    }
                                })
                            })
                        })

                })

            });
            </script>
            <script type="text/javascript">
            $(document).ready(function() {
                $('#deskripsi').summernote({
                    // dialogsInBody: true,
                    height: 300,
                    // minHeight: null,
                    // maxHeight: null,
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
            });

            $(document).on("show.bs.modal", '.modal', function(event) {
                console.log("Global show.bs.modal fire");
                var zIndex = 100000 + (10 * $(".modal:visible").length);
                $(this).css("z-index", zIndex);
                setTimeout(function() {
                    $(".modal-backdrop").not(".modal-stack").first().css("z-index", zIndex - 1)
                        .addClass("modal-stack");
                }, 0);
            }).on("hidden.bs.modal", '.modal', function(event) {
                console.log("Global hidden.bs.modal fire");
                $(".modal:visible").length && $("body").addClass("modal-open");
            });
            $(document).on('inserted.bs.tooltip', function(event) {
                console.log("Global show.bs.tooltip fire");
                var zIndex = 100000 + (10 * $(".modal:visible").length);
                var tooltipId = $(event.target).attr("aria-describedby");
                $("#" + tooltipId).css("z-index", zIndex);
            });
            $(document).on('inserted.bs.popover', function(event) {
                console.log("Global inserted.bs.popover fire");
                var zIndex = 100000 + (10 * $(".modal:visible").length);
                var popoverId = $(event.target).attr("aria-describedby");
                $("#" + popoverId).css("z-index", zIndex);
            });
            </script>


            @stack('scripts')
</body>

</html>