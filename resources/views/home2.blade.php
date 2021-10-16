@extends('layouts.vistareclu')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <table class="table">
    
        <div class="">
            <div id="dataTable_filter" class="dataTables_filter">
                <label>Buscar:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="dataTable"></label>
            </div>
        </div>


                    <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>correo</th>
                            <th>celular</th>
                            <th>ultimo grado de estudios</th>
                            <th>cv</th>
                        </tr>
                    </thead>
                    <tbody>
                    @forelse($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->celular }}</td>
                                <td>{{ $user->grado }}</td>
                                <td><a href="{{ $user->cv }}">Perfil online</a></td>
                            </tr>
                            @empty
                            <li>No hay usuarios registrados.</li>
                            @endforelse
                    </tbody>
        </table>
    </div>
</div>
@endsection
