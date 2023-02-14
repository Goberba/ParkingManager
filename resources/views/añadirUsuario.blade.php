@extends('index')
@section('meter')

<div class="card m-2" style ="width :40rem;">
    <div class="card-header">
        Usuario Nuevo
    </div>
    <div class="card-body">
        <h3>Usuario</h3>
        <form action="{{ url('/crearUsuario') }}" method="post">
        @csrf
        <div>    
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li> 
            @endforeach
            </ul>
        </div>
        @endif
        <div class="form-group">
            <label for="nombre">Nombre : </label>
            <input type="text" name="nombre" id="nombre" class="form-control" value="{{ isset($usuarios->nombre)?$usuarios->nombre:'' }}" >
        </div>
        <div class= "form-group">
            <label for="apellido">Apellido : </label>
            <input type="text" name="apellido" id="apellido" class="form-control" value="{{ isset($usuarios->apellido)?$usuarios->apellido:'' }}">
        </div>
        <div class= "form-group">
            <label for="email">Email: </label>
            <input type="text" name="email" id="email" class="form-control" value="{{ isset($usuarios->email)?$usuarios->email:'' }}">
        </div>
        <br><br>
        <button type="submit" class="btn btn-success">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
            <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
            </svg> Añadir usuario
        </button>
    </div>
    </form>
</div>
</div>

@endsection
