@extends('plantilla')

@section('titulo')
    Bienvenido a Piezas
@endsection

@section('contenido')
    <h1>Lista de Piezas</h1>
    <link rel="stylesheet" href="assets/css/main2.css">
    <nav class="navegacion">
        <a href="http://127.0.0.1:8000/principal">VOLVER A INICIO</a>   
        
    </nav>
    <a href="{{ route('piezas.create')}}">AGREGAR PIEZAS</a>
    @if(session()->has('mensaje'))
    <p style="color: red">{{ session('mensaje') }}</p>
    @endif
    <table class="container">
        <tr>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Tipo</th>
            <th>Precio</th>
            <th>Referencia</th>
        </tr>
        @foreach ($piezas as $pieza)
            <tr>
                <td>{{ $pieza->marca }}</td>
                <td>{{ $pieza->modelo }}</td>
                <td>{{ $pieza->tipo }}</td>
                <td>{{ $pieza->precio }}</td>
                <td>{{ $pieza->ref }}</td>
                <td><a href="{{ route('piezas.show', $pieza->id)}}">Ver ficha</a></td>
                <td><a href="{{ route('piezas.edit', $pieza->id)}}">Editar</a></td>
                <td>
                    <form action="{{ route('piezas.destroy', $pieza->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection

