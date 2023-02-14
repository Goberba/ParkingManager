
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
        <label for="matricula">Matricula : </label>
        <input type="text" name="matricula" id="matricula" class="form-control" value="{{ isset($coche->matricula)?$coche->matricula:'' }}" >
    </div>
    <div class= "form-group">
        <label for="marca">Marca : </label>
        <input type="text" name="marca" id="marca" class="form-control" value="{{ isset($coche->marca)?$coche->marca:'' }}">
    </div>
    <div class= "form-group">
        <label for="modelo">Modelo: </label>
        <input type="text" name="modelo" id="modelo" class="form-control" value="{{ isset($coche->modelo)?$coche->modelo:'' }}">
    </div>
    <br><br>
    <button type="submit" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg> Añadir coche
    </button>
</div>
