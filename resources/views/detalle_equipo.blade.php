@extends('plantilla')

@section('titulo')
    Detalles de Equipos
@endsection

@section('contenido')
    <h1>Detalle del equipo</h1>
    <p>Marca: {{ $equipo->marca}}</p>
    <p>Modelo: {{ $equipo->modelo}}</p>
    <p>Tipo: {{ $equipo->tipo}}</p>
    <p>Puesto: {{ $equipo->puesto}}</p>
    <p>Ref: {{ $equipo->ref}}</p>
@endsection


