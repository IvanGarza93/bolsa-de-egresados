@extends('layouts.vistaegre')

@section('content')
<div class="container">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach($errors->all() as $error)
      <li>
        {{$error}}
      </li>
      @endforeach
    </ul>
   </div>
  @endif
  @if(session()->get('message'))
  <div class="alert alert-success" role="alert">
    <strong>Success: </strong>{{session()->get('message')}}
  </div>
  @endif
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">perfil de {{Auth::user()->name}} </div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    @if($message = Session::get('success'))
                      <div class="alert alert-success">
                   <p>{{$message}}</p>
                      </div>
                   @endif
                    <form action="/home" method="POST">
                    @csrf
                       <div class="form-group">
                           <label for="name">Nombre:</label>
                           <input type="text" class="form-control" id ="name" name="name" value="{{Auth::user()->name}}">
                       </div>
                        <div class="form-group">
                           <label for="email">Correo:</label>
                           <input type="text" class="form-control" id ="email" value="{{Auth::user()->email}}" name="email">
                       </div>
                       <div class="form-group">
                           <label for="grado">Ultimo grado de estudio:</label>
                           <input type="text" class="form-control" id ="grado" name="grado" value="{{Auth::user()->grado}}">
                       </div>
                       <div class="form-group">
                           <label for="habilidad1">Taller 1:</label>
                           <input type="text" class="form-control" id ="habilidad1" name="habilidad1" value="{{Auth::user()->habilidad1}}">
                       </div>
                       <div class="form-group">
                           <label for="habilidad2">Taller 2:</label>
                           <input type="text" class="form-control" id ="habilidad2" name="habilidad2" value="{{Auth::user()->habilidad2}}">
                       </div>
                       <div class="form-group">
                           <label for="habilidad3">Taller 3:</label>
                           <input type="text" class="form-control" id ="habilidad3" name="habilidad3" value="{{Auth::user()->habilidad3}}">
                       </div>
                       <div class="form-group">
                           <label for="cv">link de tu linkeid:</label>
                           <input type="url" class="form-control" id ="cv" name="cv" value="{{Auth::user()->cv}}">
                       </div>
                        <button class="btn btn-primary" type="submit">actualizar perfil</button>
                   </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
