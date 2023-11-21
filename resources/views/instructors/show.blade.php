@extends('adminlte::page')

@section('title', 'Detalles de Instructor')

@section('content_header')
    <h1 class="text-center mb-4">Detalles de la cosa show</h1>
@stop

@section('content')
<div class="row justify-content-center align-items-center" style="height: 80vh;">
    <div class="col-md-6">
        <div class="card border border-dark d-flex flex-column h-100" style="border-color: #000;">
            <div class="card-header">
                <h5 class="card-title text-center">Información del Instructorshow</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border" style="border-color: #000;"><strong>Nombre:</strong> {{ $instrutor->name }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>apellidos:</strong> {{ $instrutor->last_name }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>sexo:</strong> {{ $instrutor->sex }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>RFC:</strong> {{ $instrutor->RFC }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Formacion:</strong> {{ $instrutor->trainign }}</li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="{{ route('instrutors.index') }}" class="btn btn-primary">Regresar a la lista</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop