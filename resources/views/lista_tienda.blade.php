@extends('plantilla')

@section('titulo')
    Bienvenido a Proveedores
@endsection

@section('contenido')
    <h1>Lista de Proveedores</h1>
    <link rel="stylesheet" href="assets/css/main2.css">
    <nav class="navegacion">
        <a href="http://127.0.0.1:8000/principal">VOLVER A INICIO</a>   
        
    </nav>
    <a href="{{ route('tiendas.create')}}">AGREGAR PROVEEDORES</a>
    @if(session()->has('mensaje'))
    <p style="color: red">{{ session('mensaje') }}</p>
    @endif
    <table class="container">
        <tr>
            <th>Nombre</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Referencia</th>
            
        </tr>
        @foreach ($tiendas as $tienda)
            <tr>
                <td>{{ $tienda->nombre }}</td>
                <td>{{ $tienda->dire }}</td>
                <td>{{ $tienda->tel }}</td>
                <td>{{ $tienda->ref }}</td>
                <td><a href="{{ route('tiendas.show', $tienda->id)}}">Ver ficha</a></td>
                <td><a href="{{ route('tiendas.edit', $tienda->id)}}">Editar</a></td>
                <td>
                    <form action="{{ route('tiendas.destroy', $tienda->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

