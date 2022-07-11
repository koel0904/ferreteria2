@extends('plantilla')

@section('titulo')
    Detalles de Piezas
@endsection

@section('contenido')
    <h1>Detalles de piezas</h1>
    <p>Marca: {{ $pieza->marca}}</p>
    <p>Modelo: {{ $pieza->modelo}}</p>
    <p>Tipo: {{ $pieza->tipo}}</p>
    <p>Puesto: {{ $pieza->puesto}}</p>
    <p>Ref: {{ $pieza->ref}}</p>
@endsection


