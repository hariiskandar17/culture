@extends('home.layout.master')

@section('content')

<!-- Start Map -->

    <section class="map">
        <div class="container">
            <div class="col-md-12 text-center">
                <h4>Penyebaran Cagar Budaya di Indonesia</h4>

                  <div class="card">
                      <div class="row position-absolute fixed-top ml-3 pl-4 mt-4">
                          <div class="col-md-3">
                              <div class="form-group">
                                  <select class="form-control" id="propinsi">
                                      <option>Provinsi</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <select class="form-control" id="kabupaten" style="display: none;">
                                      <option value="">Kabupaten</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <select class="form-control" id="kecamatan" style="display: none;">
                                      <option value="">Kecamatan</option>
                                  </select>
                              </div>
                          </div>
                          <div class="col-md-3" style="z-index: 99999">
                              <div class="form-group">
                                  <select name="tes" class="form-control" id="keinginan">
                                      {{-- <option value="0">Semua</option> --}}
                                      <option value="1">Kebudayaan</option>
                                      <option value="2">Sejarah</option>
                                  </select>
                              </div>
                          </div>
                      </div>
                      <div class="card-body" id="mapid"></div>
                      <div class="row float-right">
                          <div class="col-md-6 position-absolute fixed-bottom">

                          </div>
                      </div>
                  </div>


            </div>
        </div>
    </section>

    <!-- End Map -->

<!-- Leaftlet JS  -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://unpkg.com/leaflet@1.5.1/dist/leaflet.js"
    integrity="sha512-GffPMF3RvMeYyc1LWMHtK8EbPv0iNZ8/oTtHPx9/cc2ILxQ+u905qIwdpULaqDkyBKgOaB57QTMg7ztg8Jm2Og=="
    crossorigin=""></script>
<script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js'>
</script>
<!-- Load Esri Leaflet from CDN -->
<script src="https://unpkg.com/esri-leaflet@2.2.4/dist/esri-leaflet.js"
    integrity="sha512-tyPum7h2h36X52O2gz+Pe8z/3l+Y9S1yEUscbVs5r5aEY5dFmP1WWRY/WLLElnFHa+k1JBQZSCDGwEAnm2IxAQ=="
    crossorigin=""></script>
<!-- Leaflet.FeatureGroup.SubGroup assets -->
<script src="https://unpkg.com/leaflet.featuregroup.subgroup@1.0.2/dist/leaflet.featuregroup.subgroup.js"></script>

<script>
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
                        "Lokasi Anda")
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
                        icon: icons[element.id_kategori]
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
                        icon: icons[element.id_kategori]
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
                        icon: icons[element.id_kategori]
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
                        icon: icons[element.id_kategori]
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
                        icon: icons[element.id_kategori]
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

    function Semua(element,gambar) {
        return `<img src="/deskripsi/${gambar.gambar}" class="mr-3 img-fluid w-25">
                <div class="media-body">
                    <h5 class="mt-0">${element.name}</h5>
                    ${gambar.deskripsi.substring(0,50)}....
                </div>`
    }
</script>

@endsection
