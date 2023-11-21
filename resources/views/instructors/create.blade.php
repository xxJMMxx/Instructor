@extends('adminlte::page')

@section('title', 'Crear Instructor')

@section('content_header')
    
@stop

@section('content')
<body>
    <div class="container mb-12">
        <h1 class="text-center">Agregar un Instructor</h1>

        <form action="{{ route('instructors.store') }}" method="POST">
        @csrf

        <div class= "mb-3">
            <label for="Nombre" class="from-label">Nombre</label>
            <input type="text" class="form-control" name="name" placeholder="Ingresa el nombre del instructor">
        </div>

        <div class="mb-3">
            <label for="Apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control"  name="last_name" placeholder="Ingrese apellidos">
        </div>

        <div class="mb-3">
            <label for="sexo" class="form-label">sexo</label>
            <select class="form-select"  name="sex">
                <option value="mujer">mujer</option>
                <option value="hombre">hombre</option>
            </select>
        </div>

        <div class="mb-3">
            <label for="RFC" class="form-label">RFC</label>
            <input type="text" class="form-control"  name="RFC" placeholder="Ingrese su RFC">
        </div>

        <div class="mb-3">
            <label for="formacion" class="form-label">formacion</label>
            <input type="text" class="form-control"  name="training" placeholder="Ingrese su formacion academica">
        </div>
        <button type="submit" class="btn btn-success">Agregar</button>
        </form>

    </div>


@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
