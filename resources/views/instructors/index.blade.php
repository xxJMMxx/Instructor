@extends('adminlte::page')

@section('title', 'Lista de Instructores')

@section('content_header')
    <h1>Lista de Instructores</h1>
@stop

@section('content')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
<div class="row my-12">
    <div class="col-12">
        <h1 class="text-center">INFORMACION DE instructor</h1>
        <p class="text-end">
            <a href="{{ route('instructors.create') }}">
                <button type="button" class="btn btn-success" style="margin-right: 5px;">Agregar</button>
            </a>
        </p>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <table id="crud" class="table table-bordered">
            <thead>
                <tr>
                    
                    <th scope="col" class="text-center">Nombre</th>
                    <th scope="col" class="text-center">apellidos</th>
                    <th scope="col" class="text-center">sexo</th>
                    <th scope="col" class="text-center">RFC</th>
                    <th scope="col" class="text-center">Formacion</th>
                    
                    <th scope="col" class="text-center">Editar</th>
                    <th scope="col" class="text-center">Detalles</th>
                    <th scope="col" class="text-center">Eliminar</th>
                
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @foreach ($instructors as $instructor)
                <tr>
                    
                    <td class="text-center">{{ $instructor->name }}</td>
                    <td class="text-center">{{ $instructor->long_name }}</td>
                    <td class="text-center">{{ $instructor->sex }}</td>
                    <td class="text-center">{{ $instructor->RFC }}</td>
                    <td class="text-center">{{ $instructor->training }}</td>
                    
                    <td class="text-center">
                        <a href="{{ route('instructors.edit', $instructor) }}">
                            <button type="button" class="btn btn-primary">
                                Editar
                            </button>
                        </a>
                    </td>
                    <td class="text-center">
                        <a href="{{ route('instructors.show', $instructor) }}">
                            <button type="button" class="btn btn-success">
                                Detalles
                            </button>
                        </a>
                    </td>
                    <td class="text-center">
                        <form action="{{ route('instructors.destroy', $instructor) }}" method="post" class="d-inline formulario-eliminar">
                            @method("DELETE")
                            @csrf
                            <button type="submit" class="btn btn-danger">
                                Eliminar
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
    
@stop

@section('css') 
   <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script> console.log('Hi!'); </script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();

            Swal.fire({
                title: "¿Estás seguro?",
                text: "No podras revertir esto!!!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#d33",
                confirmButtonText: "ELIMINAR"
            }).then((result) => {
                if (result.isConfirmed) {
                    $(this).unbind('submit').submit();
                    Swal.fire({
                        title: "BORRADO!",
                        text: "TU ARCHIVO SE ELIMINO",
                        icon: "success"
                    });
                }
            });
        });
    </script>
@stop
