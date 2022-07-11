@extends('plantilla')

@section('titulo')
    Detalles de Clientes
@endsection

@section('contenido')
    <h1>Detalle del Cliente</h1>
    <p>Nombre: {{ $cliente->nombre}}</p>
    <p>Tipo: {{ $cliente->tipo}}</p>
    <p>Ciudad: {{ $cliente->ciudad}}</p>
  
    <p>Ref: {{ $cliente->ref}}</p>
@endsection


