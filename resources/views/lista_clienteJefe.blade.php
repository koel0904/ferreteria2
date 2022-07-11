@extends('plantilla')

@section('titulo')
    Bienvenido a clientes
@endsection

@section('contenido')
    <h1>Lista de clientes</h1>
    <link rel="stylesheet" href="assets/css/main2.css">
    <nav class="navegacion">
        <a href="http://127.0.0.1:8000/principal">VOLVER A INICIO</a>   
        
    </nav>
    <a href="{{ route('clientes.create')}}">AGREGAR CLIENTES</a>
    @if(session()->has('mensaje'))
    <p style="color: red">{{ session('mensaje') }}</p>
    @endif
    <table class="container">
        <tr>
            <th>Nombre</th>
            <th>Tipo</th>
            <th>Ciudad</th>
            <th>Referencia</th>
        </tr>
        @foreach ($clientes as $cliente)
            <tr>
                <td>{{ $cliente->nombre }}</td>
                <td>{{ $cliente->tipo }}</td>
                <td>{{ $cliente->ciudad }}</td>
                <td>{{ $cliente->ref }}</td>
                
                <td><a href="{{ route('clientes.show', $cliente->id)}}">Ver ficha</a></td>
                <td><a href="{{ route('clientes.edit', $cliente->id)}}">Editar</a></td>
                <td>
                    <form action="{{ route('clientes.destroy', $cliente->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

