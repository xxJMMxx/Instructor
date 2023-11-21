@extends('adminlte::page')

@section('title', 'Editar Instructor')

@section('content_header')
    <h1>Editar Instructor</h1>
@stop

@section('content')
<form method="post" action="{{ route('instructors.update', $instructor) }}">
    @method("PUT")
    @csrf

    
    </div>
    
    <div class="form-group">
        <label for="start_date">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $instructor->name }}">
    </div>

    <div class="form-group">
        <label for="start_date">Apellidos</label>
        <input type="text" name="last_name" id="last_name" class="form-control" value="{{ $instructor->Apellidos }}">
    </div>


    <div class="form-group">
        <label for="sex" class="form-label">sexo</label>
                 <select class="form-select"  name="sex">
                     <option value="mujer">Mujer</option>
                     <option value="ombre">Hombre</option>
                 </select>
    </div>


    <div class="form-group">
        <label for="RFC">RFC</label>
        <input type="text" name="RFC" id="RFC" class="form-control" value="{{ $instructor->RFC }}">
    </div>


    <div class="form-group">
        <label for="training">Formacion</label>
        <input type="date" name="training" id="training" class="form-control" value="{{ $instructor->Formacion }}">
    

     
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
