@extends('admin.layoutadmin.master')

@section('title')
Tambah
@stop
@section('content')
<style media="screen">
#mapid {
    height: 400px;
    margin-bottom: 10px;
}
</style>
<form action="{{route('lokasi.store')}}" method="POST" enctype="multipart/form-data">

    <div class="row">
        @csrf
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="control-label">Name</label>
                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">Alamat</label>
                {!! Form::textarea('alamat', null, ['class' => 'form-control', 'id' => 'alamat', 'rows' => '5']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">kategori</label>
                {!! Form::select('id_kategori', ["Budaya,sejarah"], ["1,2"], ['class' => 'form-control', 'id' =>
                'id_kategori']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">Thumbnail</label>
                {!! Form::file('gambar', null, ['class' => 'form-control', 'id' => 'gambar']) !!}
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="" class="control-label">Icon</label>
                {!! Form::select('id_kategori', $kategori->pluck('name'), $kategori->pluck('id'), ['class' =>
                'form-control', 'id' => 'id_kategori']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">Provinsi</label>
                {!! Form::select('provinsi', ["Pilih Provinsi"], null , ['class' => 'form-control
                js-example-basic-single', 'id' => 'provinsi']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">Kabupaten</label>
                {!! Form::select('kabupaten', ["Pilih Kabupaten"] , null, ['class' => 'form-control
                js-example-basic-single', 'id' => 'kabupaten']) !!}
            </div>
            <div class="form-group">
                <label for="" class="control-label">Kecamatan</label>
                {!! Form::select('kecamatan', ["Pilih kecamatan"] , null, ['class' => 'form-control
                js-example-basic-single', 'id' => 'kecamatan']) !!}
            </div>
        </div>
    </div>
    <div class="form-group text-center">
        <label for="" class="control-label">Deskripsi</label>
        {!! Form::textarea('deskripsi', null, ['class' => 'form-control', 'id' => 'deskripsi']) !!}
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <label for="" class="control-label">Latitude</label>
            {!! Form::text('latitude', null, ['class' => 'form-control', 'id' => 'latitude']) !!}
        </div>
        <div class="form-group col-md-6">
            <label for="" class="control-label">Longitude</label>
            {!! Form::text('longitude', null, ['class' => 'form-control', 'id' => 'longitude']) !!}
        </div>
    </div>

    <div id="mapid"></div>

    <div class="text-center">
        <button type="submit" id="formSave1" class="btn btn-primary text-center">Simpan</button>
    </div>
    </div>
</form>
@endsection

{{-- Leaftlet JS --}}
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
        $(".modal-backdrop").not(".modal-stack").first().css("z-index", zIndex - 1).addClass(
            "modal-stack");
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