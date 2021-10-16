@extends('layouts.vistanlog')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
         
        <div class="card">
                        <div class="row">
                            <div class="col-lg-6  d-none d-lg-block bg-login-image"><img src="assets/img/card2.jpg" style="width:105%; height: 550px;" alt=""></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Bienvenido!</h1>
                                    </div>
                                    <br><br>
                                    <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                        <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Usuario">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <br>
                                        </div>
                                        <div class="form-group">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Contraseña">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <br>
                                        </div>
                                        <div class="form-group">
                                            <br> 
                                            <button type="submit" class="btn btn-success btn-block" style="width:100%;">
                                                {{ __('Login') }}
                                            </button>
                                                
                    
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
