
@extends('plantilla')

@section('titulo')
    Edicion de Piezas
@endsection

@section('contenido')
    <form action="{{ route('piezas.update', $pieza->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="marca" placeholder="Ingrese su marca" value="{{ old('marca',$pieza->marca) }}" required/>
        <input type="text" name="modelo" placeholder="Ingrese su modelo" value="{{ old('modelo',$pieza->modelo) }}"/>
        <input type="text" name="tipo" placeholder="Ingrese su tipo" value="{{ old('tipo',$pieza->tipo) }}"/>
        <input type="text" name="precio" placeholder="Ingrese su precio" value="{{ old('precio',$pieza->precio) }}"/>
        <input type="text" name="ref" placeholder="Ingrese su Referencia" value="{{ old('ref',$pieza->ref) }}"/>
        <button type="submit">Enviar</button>
    </form>
@endsection