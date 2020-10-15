<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!--Icono-->
    <link rel="shortcut icon" href="Assets/iconoc.ico" type="image/x-icon">
    <title>InicioSesion</title>
    <style>
body{
    background-image: linear-gradient(to right ,#536976,#292E49);
}
#login{
    border: none;
    border-radius: 20px;
    background-color: white;
    -webkit-box-shadow: 23px 22px 54px -11px rgba(0,0,0,0.75);
    -moz-box-shadow: 23px 22px 54px -11px rgba(0,0,0,0.75);
    box-shadow: 23px 22px 54px -11px rgba(0,0,0,0.75);
}
.btn-grandiente{
    border: none;
    color: white;
    background-image: linear-gradient(to right ,#485563,#29323c);
    font-size: small;
}
.btn-grandiente:Hover{
    color: white;
    transform: scale(1.1);
}
    </style>
  </head>
  <body>
    <section class="container-fluid mt-5">
        <div class="container">
            <div class="row">
                <div class="col-4"></div>
                <div class="col-4">
                    <form id="login" method="POST" action="{{ route('login') }}" class="py-5 mt-5">
                        @csrf
                        <h2 class="text-center display text-uppercase">Login</h2>
                        <div class="form-group mx-sm-5 mt-4 mb-5" class="">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group mx-sm-5 mb-5">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group  mx-sm-5 text-center">
                            <button type="submit" class="btn btn-grandiente text-uppercase">Enviar</button>
                        </div>
                    </form>
                </div>
                <div class="col-4"></div>
            </div>
        </div>
    </section>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>
