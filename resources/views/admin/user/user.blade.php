@extends('admin.layoutadmin.master')

@section('title')
 Admin
@stop

@section('content')
<div class="row">
  <div class="col-md-12">
    <div class="row">
      <div class="col-md-12">
        <h4 style="padding-left: 5px;"> Users Data</h4 mar>
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
                      <th class="text-center">Name</th>
                      <th class="text-center">E-mail</th>
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
            ajax: "{{ route('table.user') }}",
            columns: [
                {data: 'id', name: 'id'},
                {data: 'name', name: 'name'},
                {data: 'email', name: 'email'},
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
