@extends('index')

@section('buscar')

<div class="card m-5" style="width: 40rem;">
<div class="card-header">Formulario de Búsqueda</div>
<div class="card-body">
<form action="{{ url('/coches/find') }}" method="post">
@csrf
<div class="form-group">
<label for="matricula">Buscar por matrícula : </label>
<input type="text" name="matricula" id="matricula" class="form-control" value="" >
</div>

<button type="submit" class="btn btn-success">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
    </svg> Buscar
</button>
</form>
</div>
</div>


<div class="card m-2" style ="width :40rem;" >
    <div class="card-header">Resultados</div>
        <table class="table table-stripped">
            <thead >
                <tr>
                    <th class="text-center">Coche</th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                    <th class="text-center"></th>
                </tr>
            </thead>
            <tbody>
                
            @isset($coches)
            @each('parcial',$coches,'coche')
            @endisset
            
            </tbody>
        </table>
      
        
        </div>
@endsection