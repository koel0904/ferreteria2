@extends('plantilla')

@section('titulo')
    Edicion de Clientes
@endsection

@section('contenido')
    <form action="{{ route('clientes.update', $cliente->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="nombre" placeholder="Ingrese su nombre" value="{{ old('marca',$cliente->nombre) }}" required/>
        <input type="text" name="tipo" placeholder="Ingrese su tipo" value="{{ old('modelo',$cliente->tipo) }}"/>
        <input type="text" name="ciudad" placeholder="Ingrese su ciudad" value="{{ old('tipo',$cliente->ciudad) }}"/>
        <input type="text" name="ref" placeholder="Ingrese su Referencia" value="{{ old('ref',$cliente->ref) }}"/>
        <button type="submit">Enviar</button>
    </form>
@endsection