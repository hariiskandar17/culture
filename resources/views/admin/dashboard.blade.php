@extends('Layoutadmin.master')

@section('title')
  Admin Cagar Budaya
@stop

@section('content')
<div class="ml-2">
  <h3></i> Dashboard</h3><hr>

  <div class="row">
  <div class="col-xs-12 col-sm-4">
      <div class="card-body-row" style="background: blue;">
          <div class="card-body-icon">
            <i class="fas fa-table"></i>
          </div>
          <h5 class="card-title">Jumlah User</h5>
          <div class="display-4">
            3.000
          </div>
          <a href="#"><h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6></a>
      </div>
  </div>
  <div class="col-xs-12 col-sm-4">
      <div class="bg-primary card-body-row">
          <div class="card-body-icon">
            <i class="fas fa-table"></i>
          </div>
          <h5 class="card-title">Jumlah Lokasi</h5>
          <div class="display-4">
            3.000
          </div>
          <a href="#"><h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6></a>
      </div>
  </div>
  <div class="col-xs-12 col-sm-4">
      <div class="card-body-row" style="background: red;">
          <div class="card-body-icon">
            <i class="fas fa-table"></i>
          </div>
          <h5 class="card-title">Jumlah Artikel</h5>
          <div class="display-4">
            3.000
          </div>
          <a href="#"><h6 class="card-text">Lihat Detail <i class="fas fa-angle-double-right ml-2"></i></h6></a>
      </div>
  </div>
</div>


</div>
@stop
