@extends('plantilla')

@section('titulo')
    Agregar Clientes
@endsection

@section('contenido')

    <form action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <input type="text" name="nombre" placeholder="Ingrese el nombre" value="{{ old('nombre') }}" required/>
        <input type="text" name="tipo" placeholder="Ingrese el tipo" value="{{ old('tipo') }}" required/>
        <input type="text" name="ciudad" placeholder="Ingrese la ciudad" value="{{ old('ciudad') }}" required/>
        <input type="text" name="ref" placeholder="Ingrese la referencia" value="{{ old('ref') }}" required/>
        
        <button type="submit">Enviar</button>
    </form>

    
@endsection