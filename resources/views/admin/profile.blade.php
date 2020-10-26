@extends('admin.layoutadmin.master')

@section('title')
 Profile
@stop

@section('content')
<h2>@yield('title')</h2>
<form method="POST" action="{{ route('profileadmin.update',$user->id) }}">
  @csrf
  @method('PUT')
  <div class="row">
  <div class="col-md-6">
    <div class="form-group">
      <label>Nama Admin</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}">
      @error('name')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
    <div class="form-group">
      <label>Email Admin</label>
      <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">
      @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
      @enderror
    </div>
  </div>
  <div class="col-md-6">

  </div>
  <div class="col-md-12">
    <div class="text-center">
      <button type="submit" class="btn btn-success">Ubah</button>
      <a href="reset" class="btn btn-danger">Ganti Password</a>
    </div>

  </div>

</div>
</form>
@endsection
