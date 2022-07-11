@extends('plantilla')

@section('titulo')
    Detalles de Proveedores
@endsection

@section('contenido')
    <h1>Detalle de los Proveedores</h1>
    <p>Nombre: {{ $tienda->nombre}}</p>
    <p>Dirección: {{ $tienda->dire}}</p>
    <p>Teléfono: {{ $tienda->tel}}</p>
    <p>Referencia: {{ $tienda->ref}}</p>

@endsection


