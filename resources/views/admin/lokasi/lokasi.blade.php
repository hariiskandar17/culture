@extends('layoutadmin.master')

@section('title')
 Lokasi
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h4 style="padding-left: 5px;"> Users Data</h4 mar>
      </div>
      <div class="col-md-6">
        <a href="{{ route('lokasi.create')}}" class="btn btn-success modal-show" title="Create User"><i class="icon-plus"></i>Tambah Data</a>
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

@endsection

@push('scripts')
    <script>
        $('#datatable').DataTable({
            responsive: true,
            processing: true,
            serverSide: true,
            ajax: "{{ route('table.lokasi') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'alamat', name: 'alamat'},
                {data: 'latitude', name: 'latitude'},
                {data: 'longitude', name: 'longitude'},
                {data: 'action', name: 'action'}
            ]
        });
      //   $(document).ready(function() {
      //     $('#datatable').DataTable({
      //       responsive: true,
      //       processing: true,
      //       serverSide: true,
      //       ajax: "{{ route('table.user') }}",
      //       columns: [
      //           {data: 'id', name: 'id'},
      //           {data: 'name', name: 'name'},
      //           {data: 'email', name: 'email'},
      //           {data: 'action', name: 'action'}
      //       ]}
      //     );
      // } );
    </script>
@endpush
