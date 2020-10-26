<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" href="{{ asset('assets/img/user/tab-icon.png') }}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link href="{{ asset('css/index.css') }}" type="text/css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>

    <!-- Leaflet -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css"
       integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ=="
       crossorigin="" />
   <link rel="stylesheet" type="text/css"
       href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css" />
   <link rel="stylesheet" type="text/css"
       href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css" />
       <!-- UI -->
       <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
       <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <title>Culture Indonesia</title>

    <style>
        #mapid {
            min-height: 470px;
        }
    </style>
</head>

<body>

    <!-- Start Navbar -->

    <nav class="navbar navbar-light main-navbar-sub navbar-expand-lg bg-transparent">
        <div class="container">
            <span class="navbar-brand mb-0 h1">
                <img src="{{asset('assets/img/user/culture2.png')}}" class="img-fluid" width="60" height="60" alt="" srcset="">
            </span>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
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

    <!-- End Navbar -->

<!-- End Navbar -->

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
                            <img src="{{asset('assets/img/user/culture2.png')}}" class="img-fluid" width="150" height="150" alt="" srcset="">
                            <br>
                            <small class="text-muted">
                                Jl. Jenderal Sudirman No. 269 RT 13/RW 09, Desa Sindangrasa, Sindangrasa, Kec. Ciamis, Kabupaten Ciamis, Jawa Barat 46215
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
            <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
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
            <script src="{{asset('js/index.js')}}"></script>
            <!-- <script>
            //define icon image locations
            // let foodIcon = "{{ asset('map-icon/candi.png') }}",
            //     mountainIcon = "{{ asset('map-icon/mountain.png') }}",
            //     oceanIcon = "{{ asset('map-icon/ocean.png') }}",
            //     tempatIcon = "{{ asset('map-icon/kampung.png') }}";
            let [candi,benteng,masjid,astana,taman,kampung,musium,situ,alun,monument,gua,gunung] = ["{{ asset('map-icon/candi.png') }}","{{ asset('map-icon/benteng.png') }}","{{ asset('map-icon/masjid.png') }}","{{ asset('map-icon/astana.png') }}","{{ asset('map-icon/taman.png') }}","{{ asset('map-icon/kampung.png') }}","{{ asset('map-icon/gerbang.png') }}","{{ asset('map-icon/situ.png') }}","{{ asset('map-icon/alun.png') }}","{{ asset('map-icon/monumen.png') }}","{{ asset('map-icon/gua.png') }}","{{ asset('map-icon/gunung.png') }}"];


            //initialize variable
            var tiles = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                    maxZoom: 20
                }),
                latlng = L.latLng(-2.039833, 123.8244163);

            var map = L.map('mapid', {
                center: latlng,
                zoom: 4,
                layers: [tiles]
            });

            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(
                    function (position) {
                        var pos = {
                            lat: position.coords.latitude,
                            lng: position.coords.longitude,
                        };
                        var m = L.marker(L.latLng(pos.lat, pos.lng)).bindPopup(
                                "Anda berada dalam jarak beberapa meter dari titik ini")
                            .openPopup();
                        m.addTo(map)
                        map.setZoom(13)
                        map.panTo(new L.latLng(pos.lat, pos.lng))
                    },
                    function () {
                        // handleLocationError(true, infoWindow, map.getCenter());
                        console.log("cannot locate the map");
                    }
                );
            } else {
                console.log("cannot locate the map");
                // Browser doesn't support Geolocation
                // handleLocationError(false, infoWindow, map.getCenter());
            }


            //define base icon features
            var MapIcon = L.Icon.extend({
                options: {
                    iconSize: [25, 25],
                    iconAnchor: [20, 35],
                    popupAnchor: [-6, -30]
                }
            });

            //custom icons
            let [Candi,Benteng,Masjid,Astana,Taman,Kampung,Musium,Situ,Alun,Monument,Gua,Gunung] = [new MapIcon({ iconUrl: candi }),new MapIcon({ iconUrl: benteng }),new MapIcon({ iconUrl: masjid }),new MapIcon({ iconUrl: astana }),new MapIcon({ iconUrl: taman }),new MapIcon({ iconUrl: kampung }),new MapIcon({ iconUrl: musium }),new MapIcon({ iconUrl: situ }),new MapIcon({ iconUrl: alun }),new MapIcon({ iconUrl: monument }),new MapIcon({ iconUrl: gua }),new MapIcon({ iconUrl: gunung })]

            //allows function to read json field and assign to icon url
            var icons = {
                "1": Candi,
                "2": Benteng,
                "3": Masjid,
                "4": Astana,
                "5": Taman,
                "6": Kampung,
                "10": Musium,
                "11": Situ,
                "12": Alun,
                "13": Monument,
                "14": Gua,
                "15": Gunung
            };

            var categories = [],
                category;
            var provinsi, kabupaten, kecamatan;

            // var layersControl = L.control.layers(null, null).addTo(map);
            var parentGroup = L.markerClusterGroup().addTo(map);

            //adding an array to hold all marker locations and names
            var bulk_list = [];

            //output sample names of points in the zoom box
            map.on("boxzoomend", function (e) {
                for (var i = 0; i < bulk_list.length; i++) {
                    if (e.boxZoomBounds.contains(bulk_list.latlng[i])) {
                        console.log(bulk_list.name[i]);
                    }
                }
            });

            let cs = '{{ csrf_token() }}';
        parentGroup.clearLayers();
        $.ajax({
            url: '{{ url('/dataMap') }}',
            method: "post",
            dataType: "json",
            data: {
                _token:cs
            },
            success: function (json) {
                var last = {};
                json.forEach(element => {
                    const regex = /sw/gi;
                    const str = '{{ url("/detail", ["id" => "sw"]) }}'
                    var link = str.replace(regex, element.id) ;
                    let title = `
                    <div class="row justify-content-center p-2">
                        <div class="media">
                            ${Semua(element,element.deskripsi)}
                        </div>
                        <a href="${link}">Selengkapnya &raquo;</a>
                    </div>`
                    var m = L.marker(L.latLng(element.latitude, element.longitude), {
                        icon: icons[element.type_id]
                    }, {
                        title
                    });
                    map.setZoom(10);
                    m.bindPopup(title).openPopup();
                    parentGroup.addLayer(m);
                    categories.push(m);
                    last = element;
                });
                map.panTo(new L.latLng(last.latitude, last.longitude))
            },
            error: function (x, y, z) {
                alert('Terjadi Sebuah Kesalahan');
            }
        });

    $('#keinginan').on('change',function() {
        let cs = '{{ csrf_token() }}';
        parentGroup.clearLayers();
        $.ajax({
            url: '{{ url('/mapKat') }}',
            method: "post",
            dataType: "json",
            data: {
                _token:cs,
                kat:$(this).val(),
                prov:$('#propinsi').val()
            },
            success: function (json) {
                var last = {};
                json.forEach(element => {
                    const regex = /sw/gi;
                    const str = '{{ url("/detail", ["id" => "sw"]) }}'
                    var link = str.replace(regex, element.id) ;
                    let title = `
                    <div class="row justify-content-center p-2">
                        <div class="media">
                            ${Semua(element,element.deskripsi)}
                        </div>
                        <a href="${link}">Selengkapnya &raquo;</a>
                    </div>`
                    var m = L.marker(L.latLng(element.latitude, element.longitude), {
                        icon: icons[element.type_id]
                    }, {
                        title
                    });
                    map.setZoom(10);
                    m.bindPopup(title).openPopup();
                    parentGroup.addLayer(m);
                    categories.push(m);
                    last = element;
                });
                map.panTo(new L.latLng(last.latitude, last.longitude))
            },
            error: function (x, y, z) {
                alert('Terjadi Sebuah Kesalahan');
            }
        });
    })

    $('#propinsi').on('change', function () {
        if ($(this).val() == null || $(this).val() == '') {
            $('#kabupaten').slideUp();
            $('#kecamatan').slideUp();
            $('#kabupaten').val('');
            console.log($('#kabupaten').val());
            $('#kecamatan').val('');
        } else {
            $('#kabupaten').slideDown();
            $('#kecamatan').slideUp();
        }
        let cs = '{{ csrf_token() }}';
        parentGroup.clearLayers();
        $.ajax({
            url: '{{ url('/mapProv') }}',
            method: "post",
            dataType: "json",
            data: {
                _token:cs,
                provinsi: $(this).val(),
                kat: $('#keinginan').val()
            },
            success: function (json) {
                var last = {};
                json.forEach(element => {
                    const regex = /sw/gi;
                    const str = '{{ url("/detail", ["id" => "sw"]) }}'
                    var link = str.replace(regex, element.id) ;
                    let title = `
                    <div class="row justify-content-center p-2">
                        <div class="media">
                            ${Semua(element,element.deskripsi)}
                        </div>
                        <a href="${link}">Selengkapnya &raquo;</a>
                    </div>`
                    var m = L.marker(L.latLng(element.latitude, element.longitude), {
                        icon: icons[element.type_id]
                    }, {
                        title
                    });
                    map.setZoom(10);
                    m.bindPopup(title).openPopup();
                    parentGroup.addLayer(m);
                    categories.push(m);
                    last = element;
                });
                map.panTo(new L.latLng(last.latitude, last.longitude))
            },
            error: function (x, y, z) {
                console.log(x);
                console.log(y);
                console.log(z);
                alert('Terjadi Sebuah Kesalahan');
            }
        });
    })

    $('#kabupaten').on('change', function () {
        if ($(this).val() == null || $(this).val() == '') {
            $('#kecamatan').slideUp();
            $('#kecamatan').val('');
        } else {
            $('#kecamatan').slideDown();
        }
        let cs = '{{ csrf_token() }}';
        parentGroup.clearLayers();
        $.ajax({
            url: '{{ url('/mapKab') }}',
            method: "post",
            dataType: "json",
            data: {
                _token:cs,
                provinsi: $('#propinsi').val(),
                kat: $('#keinginan').val(),
                kabupaten: $(this).val()
            },
            success: function (json) {
                var last = {};
                json.forEach(element => {
                    const regex = /sw/gi;
                    const str = '{{ url("/detail", ["id" => "sw"]) }}'
                    var link = str.replace(regex, element.id) ;
                    let title = `
                    <div class="row justify-content-center p-2">
                        <div class="media">
                            ${Semua(element,element.deskripsi)}
                        </div>
                        <a href="${link}">Selengkapnya &raquo;</a>
                    </div>`
                    var m = L.marker(L.latLng(element.latitude, element.longitude), {
                        icon: icons[element.type_id]
                    }, {
                        title
                    });
                    map.setZoom(10);
                    m.bindPopup(title).openPopup();
                    parentGroup.addLayer(m);
                    categories.push(m);
                    last = element;
                });
                map.panTo(new L.latLng(last.latitude, last.longitude))
            },
            error: function (x, y, z) {
                alert('Terjadi Sebuah Kesalahan');
            }
        });
    })

    $('#kecamatan').on('change', function () {
        let cs = '{{ csrf_token() }}';
        parentGroup.clearLayers();
        $.ajax({
            url: '{{ url('/mapKec') }}',
            method: "post",
            dataType: "json",
            data: {
                _token:cs,
                provinsi: $('#propinsi').val(),
                kabupaten: $('#kabupaten').val(),
                kat: $('#keinginan').val(),
                kecamatan: $(this).val()
            },
            success: function (json) {
                var last = {};
                json.forEach(element => {
                    const regex = /sw/gi;
                    const str = '{{ url("/detail", ["id" => "sw"]) }}'
                    var link = str.replace(regex, element.id) ;
                    let title = `
                    <div class="row justify-content-center p-2">
                        <div class="media">
                            ${Semua(element,element.deskripsi)}
                        </div>
                        <a href="${link}">Selengkapnya &raquo;</a>
                    </div>`
                    var m = L.marker(L.latLng(element.latitude, element.longitude), {
                        icon: icons[element.type_id]
                    }, {
                        title
                    });
                    map.setZoom(10);
                    m.bindPopup(title).openPopup();
                    parentGroup.addLayer(m);
                    categories.push(m);
                    last = element;
                });
                map.panTo(new L.latLng(last.latitude, last.longitude))
            },
            error: function (x, y, z) {
                alert('Terjadi Sebuah Kesalahan');
            }
        });
    });



        </script>
        <script type="text/javascript">


            $(document).ready(function () {
                fetch('https://x.rajaapi.com/poe')
                .then(r => r.json())
                .then(r => {
                        $.ajax({
                        url: 'https://x.rajaapi.com/MeP7c5ne' + r.token + '/m/wilayah/provinsi',
                        type: 'GET',
                        dataType: 'json',
                        success: function (json) {
                            if (json.code == 200) {
                                for (i = 0; i < Object.keys(json.data).length; i++) {
                                    $('#propinsi').append($('<option>').text(json.data[i].name).attr(
                                        'value', json.data[i].id));
                                }
                            } else {
                                $('#kabupaten').append($('<option>').text('Data tidak di temukan').attr(
                                    'value', 'Data tidak di temukan'));
                            }
                        }
                    });
                });

                $("#propinsi").change(function () {
                    fetch('https://x.rajaapi.com/poe')
                    .then(r => r.json())
                    .then(r => {
                        var propinsi = $("#propinsi").val();
                        $.ajax({
                            url: 'https://x.rajaapi.com/MeP7c5ne' + r.token +'/m/wilayah/kabupaten',
                            data: "idpropinsi=" + propinsi,
                            type: 'GET',
                            cache: false,
                            dataType: 'json',
                            success: function (json) {
                                $("#kabupaten").html('');
                                if (json.code == 200) {
                                    for (i = 0; i < Object.keys(json.data).length; i++) {
                                        $('#kabupaten').append($('<option>').text(json.data[i].name)
                                            .attr('value', json.data[i].id));
                                    }
                                    $('#kecamatan').html($('<option>').text('-- Pilih Kecamatan --')
                                        .attr('value', '-- Pilih Kecamatan --'));
                                    $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --')
                                        .attr('value', '-- Pilih Kelurahan --'));

                                } else {
                                    $('#kabupaten').append($('<option>').text(
                                        'Data tidak di temukan').attr('value',
                                        'Data tidak di temukan'));
                                }
                            }
                        });
                    })
                });
                $("#kabupaten").change(function () {
                    fetch('https://x.rajaapi.com/poe')
                    .then(r => r.json())
                    .then(r => {
                        var kabupaten = $("#kabupaten").val();
                        $.ajax({
                            url: 'https://x.rajaapi.com/MeP7c5ne' + r.token +'/m/wilayah/kecamatan',
                            data: "idkabupaten=" + kabupaten + "&idpropinsi=" + propinsi,
                            type: 'GET',
                            cache: false,
                            dataType: 'json',
                            success: function (json) {
                                $("#kecamatan").html('');
                                if (json.code == 200) {
                                    for (i = 0; i < Object.keys(json.data).length; i++) {
                                        $('#kecamatan').append($('<option>').text(json.data[i].name)
                                            .attr('value', json.data[i].id));
                                    }
                                    $('#kelurahan').html($('<option>').text('-- Pilih Kelurahan --')
                                        .attr('value', '-- Pilih Kelurahan --'));

                                } else {
                                    $('#kecamatan').append($('<option>').text(
                                        'Data tidak di temukan').attr('value',
                                        'Data tidak di temukan'));
                                }
                            }
                        });
                    });
                });
            });
        </script> -->
        </body>

        </html>
