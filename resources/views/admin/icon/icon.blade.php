@extends('admin.layoutadmin.master')

@section('title')
 Icon
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h4 style="padding-left: 5px;"> Users Data</h4 mar>
      </div>
      <div class="col-md-6">
        <a href="{{ route('icon.create')}}" class="btn btn-success modal-show" title="Create User"><i class="icon-plus"> </i>Tambah Data</a>
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
                      <th class="text-center">Icon</th>
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
            ajax: "{{ route('table.icon') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'icon', name: 'icon'},
                {data: 'action', name: 'action', class: 'text-center'}
            ]
        });
    </script>
@endpush
