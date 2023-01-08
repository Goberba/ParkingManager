@extends('index')
@section('editar')
<div class="card m-5" style="width: 30rem;">
<div class="card-header">Formulario de edición</div>
<div class="card-body">

    <form action="{{url('/coches/'.$coche->id)}}" method="post">
        @csrf
        {{method_field('PATCH')}}
        @include('formulario')
    </form>
</div>
</div>
    
@endsection