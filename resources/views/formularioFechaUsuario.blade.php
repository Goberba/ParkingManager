
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
        <label for="usuario">Usuario : </label>
        <select class="form-select" name="users">
            @foreach ($usuarios as $usuario)
                <option value="{{ $usuarios->id }}" > {{ $usuarios->nombre }}</option>
            @endforeach
        </select>
    </div>
    <br><br>
    <button type="submit" class="btn btn-success">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
        <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg> Buscar
    </button>
</div>
