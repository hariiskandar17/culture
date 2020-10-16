@extends('layoutadmin.master')

@section('title')
 Artikel
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h4 style="padding-left: 5px;"> Lokasi</h4 mar>
      </div>
      <div class="col-md-6">
        <a href="{{ route('artikel.create')}}" class="btn btn-success modal-show" title="Tambah Artikel"><i class="icon-plus"></i>Tambah Data</a>
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
                      <th class="text-center">Title</th>
                      <th class="text-center">Slug</th>
                      <th class="text-center">Status</th>
                      <th class="text-center">Body</th>
                      <th class="text-center" width="17%">Action</th>
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
            ajax: "{{ route('table.artikel') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'title', name: 'title'},
                {data: 'slug', name: 'slug'},
                {data: 'status', name: 'status'},
                {data: 'body', name: 'body'},
                {data: 'action', name: 'action'}
            ]
        });
    </script>
@endpush
