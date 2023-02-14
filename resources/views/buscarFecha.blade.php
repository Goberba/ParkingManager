@extends('index')
@section('busquedaFechaUsuario')

<div class="card m-2" style ="width :40rem;">
    <div class="card-header">
        Busqueda
    </div>
    <div class="card-body">
    <h3>Busqueda por usuario</h3>
    <form action="{{ url('/coches') }}" method="post">
    @csrf
    @include('formularioFechaUsuario')
    </form>
</div>
</div>

@endsection
