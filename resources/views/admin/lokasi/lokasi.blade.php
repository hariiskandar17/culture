@extends('admin.layoutadmin.master')

@section('title')
 Lokasi
@stop

<!-- 
<div class="modal fade" id="modalsimpan" tabindex="-1" data-keyboard="false" data-backdrop="static"  role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" id="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="modal-title">Form Input</h4>
            </div>
              <div class="modal-body" id="modal-body"> -->
              <!-- <form action="{{route('lokasi.store')}}" method="POST" enctype="multipart/form-data">

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
                   <label for="" class="control-label">g</label>
                   {!! Form::file('gambar', null, ['class' => 'form-control', 'id' => 'gambar']) !!}
                 </div>
               </div>
               <div class="col-md-6">
                 <div class="form-group">
                   <label for="" class="control-label">Kategori</label>
                   {!! Form::select('id_kategori', $kategori->pluck('name'), $kategori->pluck('id'), ['class' => 'form-control', 'id' => 'id_kategori']) !!}
                 </div>
                 <div class="form-group">
                   <label for="" class="control-label">Provinsi</label>
                   {!! Form::select('provinsi', ["Pilih Provinsi"], null , ['class' => 'form-control js-example-basic-single', 'id' => 'provinsi']) !!}
                 </div><div class="form-group">
                   <label for="" class="control-label">Kabupaten</label>
                   {!! Form::select('kabupaten', ["Pilih Kabupaten"] , null, ['class' => 'form-control js-example-basic-single', 'id' => 'kabupaten']) !!}
                 </div>
                 <div class="form-group">
                   <label for="" class="control-label">Kecamatan</label>
                   {!! Form::select('kecamatan', ["Pilih kecamatan"] , null, ['class' => 'form-control js-example-basic-single', 'id' => 'kecamatan']) !!}
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

           </div>
           <div class="modal-footer" id="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
               <button type="submit" id="formSave1" class="btn btn-primary">Simpan</button>
           </div>
         </form> -->
       <!-- </div>
   </div>
  </div> -->
<!--
  <script type="text/javascript">
  $('#formSave1').submit(function(event){
          event.preventDefault();
          var request = new FormData(this);
          $('.modal_boddy').find('.help-block').remove();
          $('.modal_boddy').find('.form-group').removeClass('has-error');
          $.ajax({
              url: "{{ route('lokasi.store') }}",
              method: "POST",
              data: request,
              contentType: false,
              cache: false,
              processData: false,
              success:function(data){
                $('#formSave1').trigger("reset");
                $('#modalsimpan').modal('hide');
                $('#datatable').DataTable().ajax.reload();

                      swal({
                          type  : 'success',
                          title : 'Berhasil!',
                          text  : 'Data Telah Tersimpan!'
                      });
                  }
              },false);
              error : function (xhr) {
                  var res = xhr.responseJSON;
                  if ($.isEmptyObject(res) == false) {
                      $.each(res.errors, function (key, value) {
                          $('#' + key)
                              .closest('.form-group')
                              .addClass('has-error')
                              .append('<span class="help-block"><strong>' + value + '</strong></span>');
                      });
                  }
              }
          });
      });
  </script> -->





@section('content')


<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h4 style="padding-left: 5px;">Lokasi</h4 mar>
      </div>
      <div class="col-md-6">
        <a href="{{route('lokasi.create')}}" class="btn btn-success"><i class="icon-plus"></i>Tambah Data</a>
      </div>

    </div>
    <div class="panel panel-margin panel-primary">
  <div class="panel-heading">
      <h3 class="panel-title">Data</h3>
  </div>
    <div class="panel-body">
          <table id="datatable" class="table table-hover" style="width:100%">
              <thead>
                  <tr>
                    <th class="text-center" width="5%">Id</th>
                    <th class="text-center">Nama</th>
                    <!-- <th class="text-center">Kategori</th> -->
                    <th class="text-center">Alamat</th>
                    <th class="text-center">Latitude</th>
                    <th class="text-center">Longitude</th>
                    <th class="text-center" style="width:17%;">Action</th>
                  </tr>
              </thead>
              <tbody>

              </tbody>
          </table>
    </div>
    </div>
  </div>
</div>

</div>


@endsection

@push('scripts')
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
    $('#datatable').DataTable({
      responsive: true,
      processing: true,
      serverSide: true,
      ajax: "{{ route('table.lokasi') }}",
      columns: [
        {data: 'id', name: 'id'},
        {data: 'name', name: 'name'},
        // {data: 'kategori', name: 'kategori'},
        {data: 'alamat', name: 'alamat'},
        {data: 'latitude', name: 'latitude'},
        {data: 'longitude', name: 'longitude'},
        {data: 'action', name: 'action'}
      ]
    });

    $('#formSave1').submit(function(e){
            e.preventDefault();
            var request = new FormData(this);
            $('.modal_boddy').find('.help-block').remove();
            $('.modal_boddy').find('.form-group').removeClass('has-error');
            $.ajax({
                url: "{{ route('lokasi.store') }}",
                method: "POST",
                data: request,
                contentType: false,
                cache: false,
                processData: false,
                success:function(data){
                  $('.modal_boddy').trigger('reset');
                  $('#modal').modal('hide');
                  $('#datatable').DataTable().ajax.reload();
                    if(data == "sukses"){
                        $('#closeModalTambah').click();
                        $('#formSave')[0].reset();
                        alert('berhasil menambah data');
                        loadDataTable();

                        swal({
                            type  : 'success',
                            title : 'Berhasil!',
                            text  : 'Data Telah Tersimpan!'
                        });
                    }
                },
                error : function (xhr) {
                    var res = xhr.responseJSON;
                    if ($.isEmptyObject(res) == false) {
                        $.each(res.errors, function (key, value) {
                            $('#' + key)
                                .closest('.form-group')
                                .addClass('has-error')
                                .append('<span class="help-block"><strong>' + value + '</strong></span>');
                        });
                    }
                }
            });
        });

    //
    // var tiles = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}',{
    //             maxZoom: 20,
    //             subdomains:['mt0','mt1','mt2','mt3']
    //         }),latlng = L.latLng(-2.039833, 123.8244163);
    //
    // var map = L.map('mapid', {
    //     center: latlng,
    //     zoom: 4,
    //     layers: [tiles]
    // });
    // var popup = L.popup();
    // function onMapClick(e) {
    //     popup
    //         .setLatLng(e.latlng)
    //         .setContent("Latitude dan Longitude " + e.latlng.toString())
    //         .openOn(map);
    //         $('#latitude').val(e.latlng.lat);
    //         $('#longitude').val(e.latlng.lng);
    //         console.log(e);
    // }
    // map.on('click', onMapClick);
    // $.ajax({
    //     url: 'https://x.rajaapi.com/MeP7c5neM1Z6h7RJE7LsXP7YkOGGGL8zDgcpgqNU6NckugIK41So9VLzOb/m/wilayah/provinsi',
    //     type:'get',
    //     dataType:'json',
    //     success:(re => {
    //         let tes = re.data;
    //         for (const i in tes) {
    //             $('#provinsi').append(`
    //             <option value="${tes[i].id}">${tes[i].name}</option>
    //             `)
    //         }
    //     })
    // })
    //
    // $('#provinsi').on('change',function() {
    //     const id = $(this).val();
    //         $.ajax({
    //         url: `https://x.rajaapi.com/MeP7c5neM1Z6h7RJE7LsXP7YkOGGGL8zDgcpgqNU6NckugIK41So9VLzOb/m/wilayah/kabupaten?idpropinsi=${id}`,
    //         type:'get',
    //         dataType:'json',
    //         success:(re => {
    //             let tes = re.data;
    //             for (const i in tes) {
    //                 $('#kabupaten').append(`
    //                 <option value="${tes[i].id}">${tes[i].name}</option>
    //                 `)
    //             }
    //         })
    //     })
    // })
    //
    // $('#kabupaten').on('change',function() {
    //     const id = $(this).val();
    //         $.ajax({
    //         url: `https://x.rajaapi.com/MeP7c5neM1Z6h7RJE7LsXP7YkOGGGL8zDgcpgqNU6NckugIK41So9VLzOb/m/wilayah/kecamatan?idkabupaten=${id}`,
    //         type:'get',
    //         dataType:'json',
    //         success:(re => {
    //             let tes = re.data;
    //             for (const i in tes) {
    //                 $('#kecamatan').append(`
    //                 <option value="${tes[i].id}">${tes[i].name}</option>
    //                 `)
    //             }
    //         })
    //     })
    // })

    </script>
@endpush
