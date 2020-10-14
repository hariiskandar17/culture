<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

    <title>Login</title>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5">
                <h1>
                    Culture
                </h1>
                <p>
                    Sebelum anda memulai, anda harus masuk atau mendaftar jika anda belum memiliki akun
                </p>
                <form action="{{ route('login') }}" method="post">
                  @csrf
                    <input id="email" class="form-control email" type="email" name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <input class="form-control password" type="password" placeholder="Password" id="password" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <!-- <div class="text-left">
                        <input type="checkbox" onclick="myFunction()" >
                        <small class="text-left">
                        Lihat Password
                        </small>
                    </div> -->
                    <button type="submit" class="btn btn-md btn-block">Masuk</button>
                </form>
                <a href="" class="link">
                    <small>Lupa Password ?</small>
                </a>
                <br>
                <small>TIdak Punya Akun ? <a href="" class="link">Daftar</a></small>
            </div>
            <div class="col-md-7" style="background: url({{ asset('assets/img/user/login.png') }}) no-repeat;">
                <div class="title">
                    <h1>
                        Culture
                    </h1>
                    <div id="greeting">

                    </div>
                    <p>
                        Terimakasih sudah mengunjungi website kami.
                        <br> Silahkan isi form disamping ini.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myinput");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }

        datetoday = new Date();
        thehour = datetoday.getHours();
        if (thehour >= 4 && thehour <= 11) {
            display = "Pagi";
        } else if (thehour >= 11 && thehour <= 15) {
            display = "Siang";
        } else if (thehour >= 15 && thehour <= 18) {
            display = "Sore";
        } else {
            display = "Malam";
        }

        const greeting = ("<h4>- Selamat " + display + "</h4>");
        document.getElementById("greeting").innerHTML = greeting;
    </script>
</body>

</html>
<!--
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> -->
