@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">

                <img style="float: left; margin: 0px 15px 15px 0px;" class="d-block w-25" src='/img/logo_media.png'>
                <div style="text-align: center"><h1>Playa Alta Beachclub </h1>
                <div  class="fb-like" data-href="https://www.facebook.com/chiringuito.playa.alta" data-width="" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
                </div>
                <p></p>
                <div id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="false" aria-controls="collapseOne">
                                    <img style="float: left; margin: 0px 15px 15px 0px; " src='/img/cocktai.png'>
                                    <h2 style="vert-align: middle"><span class="badge badge-secondary">Especialidades</span></h2>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseOne" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div id="carouselCoctels" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/smoothies.jpg" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Smoothies</p></h2>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/sexonthebeach.jpg" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Sex on the Beach</p></h2>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/pinacolada.jpg" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Piña Colada</p></h2>

                                            </div>
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselCoctels" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselCoctels" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseEvent"
                                        aria-expanded="false" aria-controls="collapseEvent">
                                    <img style="float: left; margin: 0px 15px 15px 0px; " src='/img/evento.png'>
                                    <h2 style="vert-align: middle"><span class="badge badge-secondary">Eventos</span></h2>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseEvent" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div id="carouselEventos" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/15junio.jpg" alt="First slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/15junio.jpg" alt="Second slide">
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/15junio.jpg" alt="Third slide">
                                        </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselEventos" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselEventos" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card-header" id="headingOne">
                            <h5 class="mb-0">
                                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseMenu"
                                        aria-expanded="false" aria-controls="collapseOne">
                                    <img style="float: left; margin: 0px 15px 15px 0px; " src='/img/menu.png'>
                                    <h2><span class="badge badge-secondary">Menu</span></h2>
                                </button>
                            </h5>
                        </div>
                        <div id="collapseMenu" class="collapse" aria-labelledby="headingOne"
                             data-parent="#accordion">
                            <div class="card-body">
                                <div id="carouselMenu" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <img class="d-block w-100" src="img/arroz.png" alt="First slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Arroz de Marisco</p></h2>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/ensaladaffrutas.png" alt="Second slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Ensalda de Frutas</p></h2>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/lingua.png" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Linguado a la Plancha</p></h2>

                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <img class="d-block w-100" src="img/tomate.png" alt="Third slide">
                                            <div class="carousel-caption d-none d-md-block">
                                                <h2><p>Tomate Aliñada</p></h2>

                                            </div>
                                        </div>

                                    </div>
                                    <a class="carousel-control-prev" href="#carouselMenu" role="button" data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselMenu" role="button" data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h5 class="mb-0">
                                    <button class="btn btn-link collapsed" data-toggle="collapse"
                                            data-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                        <img style="float: left; margin: 0px 15px 15px 0px; " src='/img/wifi.png'>
                                        <h2><span class="badge badge-secondary">Internet</span></h2>
                                    </button>
                                </h5>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                 data-parent="#accordion">

                                <div class="card-body">
                                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                       data-slide="prev">
                                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                       data-slide="next">
                                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>

                                <form>
                                    <div style="text-align: center"><h2>Login for Internet</h2></div>
                                    <div class="card">

                                        <div class="card-header">{{ __('Social Loginn') }}</div>
                                        <div class="card-body">
                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <a href="{{ url('/login/facebook') }}" class="btn btn-primary">
                                                        Facebook</a>
                                                    <p></p>
                                                    <a href="{{ url('/login/google') }}" class="btn btn-danger">
                                                        Google</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                        </div>
                                </form>
                                @csrf
                                @csrf
                                <div class="card">
                                    <div class="card-header">{{ __('Email Login') }}</div>

                                    <div class="card-body">
                                        <form method="POST" action="{{ route('login') }}">
                                            @csrf

                                            <div class="form-group row">
                                                <label for="email"
                                                       class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                                <div class="col-md-6">
                                                    <input id="email" type="email"
                                                           class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                           name="email" value="{{ old('email') }}" required autofocus>

                                                    @if ($errors->has('email'))
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <label for="password"
                                                       class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                                                <div class="col-md-6">
                                                    <input id="password" type="password"
                                                           class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                                           name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="form-group row">
                                                <div class="col-md-6 offset-md-4">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="remember"
                                                               id="remember" {{ old('remember') ? 'checked' : '' }}>

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
                                                </div>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                                        {{ __('Forgot Your Password?') }}
                                                    </a>
                                                </div>
                                            </div>
                                            @csrf
                                            <div class="form-group row mb-0">
                                                <div class="col-md-8 offset-md-4">
                                                    <a class="btn btn-link" href="{{ route('register') }}">
                                                        No Account? Click here to Register
                                                    </a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
