@extends('plantilla')

@section('titulo')
    Bienvenido a Empleados
@endsection

@section('contenido')
    <h1>Lista de Empleados</h1>
    <link rel="stylesheet" href="assets/css/main2.css">
    <nav class="navegacion">
        <a href="http://127.0.0.1:8000/principal">VOLVER A INICIO</a>   
        
    </nav>
    <a href="{{ route('empleados.create')}}">AGREGAR EMPLEADOS</a>
    @if(session()->has('mensaje'))
    <p style="color: red">{{ session('mensaje') }}</p>
    @endif
    <table class="container">
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Sexo</th>
            <th>Edad</th>
            <th>Teléfono</th>
        </tr>
        @foreach ($empleados as $empleado)
            <tr>
                <td>{{ $empleado->nombre }}</td>
                <td>{{ $empleado->ape }}</td>
                <td>{{ $empleado->sex }}</td>
                <td>{{ $empleado->edad }}</td>
                <td>{{ $empleado->tel }}</td>
                <td><a href="{{ route('empleados.show', $empleado->id)}}">Ver ficha</a></td>
                <td><a href="{{ route('empleados.edit', $empleado->id)}}">Editar</a></td>
                <td>
                    <form action="{{ route('empleados.destroy', $empleado->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

