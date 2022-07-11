@extends('plantilla')

@section('titulo')
    Edicion de Proveedores
@endsection

@section('contenido')
    <form action="{{ route('tiendas.update', $tienda->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" placeholder="Ingrese su nombre" value="{{ old('nombre',$tienda->nombre) }}" required/>
        <input type="text" name="dire" placeholder="Ingrese sus apellidos" value="{{ old('dire',$tienda->dire) }}"/>
        <input type="text" name="tel" placeholder="Ingrese su sexo" value="{{ old('tel',$tienda->tel) }}"/>
        <input type="text" name="ref" placeholder="Ingrese su edad" value="{{ old('ref',$tienda->ref) }}"/>
        <button type="submit">Enviar</button>
    </form>
@endsection