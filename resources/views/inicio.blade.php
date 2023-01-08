@extends('index')
@section('principal')

<div class="card m-2" style ="width :40rem;">
    <div class="card-header">
    Coche Nuevo
    </div>
    <div class="card-body">
    <h3>Coche</h3>
    <form action="{{ url('/coches') }}" method="post">
    @csrf
    @include('formulario')
    </form>
    </div>
</div>
    @include('listaEntera')
@endsection





