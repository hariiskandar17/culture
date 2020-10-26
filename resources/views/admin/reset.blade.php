@extends('admin.layoutadmin.master')

@section('title')
 Ubah Password
@stop

@section('content')
<h2>@yield('title')</h2>

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    <div class="form-group row">
        <label for="password" class="col-md-2 col-form-label text-md-right">Password Lama</label>

        <div class="col-md-6">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password1" class="col-md-2 col-form-label text-md-right">Password Baru</label>

        <div class="col-md-6">
            <input id="password1" type="password" class="form-control @error('password1') is-invalid @enderror" name="password1" required autocomplete="new-password">

            @error('password1')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="form-group row">
        <label for="password2" class="col-md-2 col-form-label text-md-right">Konfir Password</label>

        <div class="col-md-6">
            <input id="password2" type="password" class="form-control @error('password2') is-invalid @enderror" name="password2" required autocomplete="new-password">

            @error('password2')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>


    <div class="form-group row mb-0">
        <div class="col-md-6 offset-md-4">
            <button type="submit" class="btn btn-primary">
                Reset
            </button>
        </div>
    </div>
</form>
@endsection
