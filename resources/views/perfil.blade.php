@extends('layouts.vistaegre')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
        <div class="card-header">
        <h4>Mi perfil </h4>
        </div>
        <div class="card-body">
        <label >Nombre: {{ auth()->user()->name }}</label><br>
        <label >Correo: {{ auth()->user()->email }}</label><br>
        <label >Ultimo grado de estudio: {{ auth()->user()->grado }}</label><br>
        <label >celular: {{ auth()->user()->celular }}</label><br>
        <label >Talleres, cursos o dimplomados:</label><br>
        <label >{{ auth()->user()->habilidad1 }}</label><br>
        <label >{{ auth()->user()->habilidad2 }}</label><br>
        <label >{{ auth()->user()->habilidad3 }}</label><br>
        <label ><a href="{{ auth()->user()->cv }}">Perfil online</a></label><br>
        </div>
        </div>
        </div>
    </div>
</div>
@endsection
