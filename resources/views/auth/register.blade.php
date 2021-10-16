@extends('layouts.app')

@section('content')
<script type="text/javascript">
<!--
function showMe (it, box) {
var vis = (box.checked) ? "block" : "none";
document.getElementById(it).style.display = vis;
}
//-->
</script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Correo') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Contraseña') }}</label>

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
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirma contraseña') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="matricula" class="col-md-4 col-form-label text-md-right">{{ __('Matricula') }}</label>
                            <div class="col-md-6">
                                <input id="matricula" type="number" class="form-control" name="matricula" value="{{ old('matricula') }}" required autocomplete="matricula" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="celular" class="col-md-4 col-form-label text-md-right">{{ __('Celular') }}</label>
                            <div class="col-md-6">
                                <input id="celular" type="tel" class="form-control" name="celular" value="{{ old('celular') }}" required autocomplete="celular" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                        <label for="grado" class="col-md-4 col-form-label text-md-right">{{ __('Ultimo grado de estudios') }}</label>
                            <div class="col-md-6">
                                <select id="grado" name="grado">
                                    <option value="Lincenciatura" selected>Lincenciatura</option>
                                    <option value="Maestria">Maestria</option>
                                    <option value="Doctorado">Doctorado</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="habilidad1" class="col-md-4 col-form-label text-md-right">{{ __('Taller, curso o diplomado') }}</label>
                            <div class="col-md-6">
                                <input id="habilidad1" type="text" class="form-control" name="habilidad1" value="{{ old('habilidad1') }}" required autocomplete="habilidad1" autofocus>
                                <center>
                                <input type="checkbox"  onclick="showMe('div1', this)">Quieres agregar otro taller, curso o diplomado
                                </center>
                            </div>
                        </div>
                        <div id="div1" style="display:none">
                        <div class="form-group row">
                            <label for="habilidad2" class="col-md-4 col-form-label text-md-right">{{ __('Otro taller, curso o diplomado') }}</label>
                            <div class="col-md-6">
                                <input id="habilidad2" type="text" class="form-control" name="habilidad2" value="Ninguno"  autofocus>
                            </div>
                        </div>
                            <center>
                            <input type="checkbox"  onclick="showMe('div2', this)">Quieres agregar otro taller, curso o diplomado
                            </center>
                        </div>
                        <div id="div2" style="display:none">
                        <div class="form-group row">
                            <label for="habilidad3" class="col-md-4 col-form-label text-md-right">{{ __('Otro taller, curso o diplomado') }}</label>
                            <div class="col-md-6">
                                <input id="habilidad3" type="text" class="form-control" name="habilidad3" value="Ninguno" autofocus>
                            </div>
                        </div>
                        </div>
                        <div class="form-group row">
                            <label for="cv" class="col-md-4 col-form-label text-md-right">{{ __('poner el link de tu cv ') }}</label>
                            <div class="col-md-6">
                                <!-- ¡No olvides el enctype! -->
                                <!-- Campo de selección de archivo -->
                                <input type="file" name="cv" id="cv" enctype="multipart/form-data" />
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
